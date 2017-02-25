/**
 * Created by antonshell on 10.02.2017.
 */

var editor = (function(jq172) {

    var editorPrefix = 'editor-';
    var viewPrefix = 'view-';
    var siteId;


    var init = function (id) {
        siteId = id;
        initInputs();
        populateLsData();
        initUploads();
    };

    var initInputs = function(){
        $(":input").change(function() {
            updateView($(this));
        }).keypress(function() {
            updateView($(this));
        }).keydown(function() {
            updateView($(this));
        }).keyup(function() {
            updateView($(this));
        });
    };

    var initUploads = function () {
        $(".editor-upload").each(function () {
            var formData = {
                'site_id' : siteId
            };

            //var buttonText = $(this).html();
            //var buttonText = $(this).val();

            var inputElement = $(this);

            var buttonText = inputElement.data('label');

            var targetId = inputElement.data('target');

            jq172(this).uploadifive({
                //'buttonText': 'Update before photo',
                'buttonText': buttonText,
                'buttonClass': 'load-btn load-btn-gen',
                'queueID': 'file-before-queue',
                'removeCompleted': true,
                'uploadScript': '/sites/site/upload',
                'formData': formData,
                'height': 38,
                'multi': false,
                'width': '100%',
                'onUploadComplete' : function (file, data) {
                    data = JSON.parse(data);



                    var targetElement = $('#' + targetId);
                    var tag = targetElement.prop("tagName");

                    inputElement.val(data.url);

                    var inputId = inputElement.attr('id');
                    setLsItem(inputId,data.url);

                    if(tag == "A"){
                        targetElement.attr('href',data.url);
                    }

                    if(tag == "IMG"){
                        targetElement.attr('src',data.url);
                    }




                },
                'fileTypeExts' : '*.gif; *.jpg; *.png; *.jpeg'
            });
        });

        $(".uploadifive-button").attr('style', '').removeClass("uploadifive-button");
    };

    /**
     *
     * @param element
     */
    var updateView = function (element) {
        var inputId = element.attr('id');
        var content = element.val();

        if(inputId.indexOf(editorPrefix) !== -1){
            var viewId = getViewId(inputId);
            var view = $('#' + viewId);

            if(view.html() != content){
                setLsItem(inputId,content);
                view.html(content);
            }
        }
    };

    /**
     *
     * @param inputId
     * @returns {*}
     */
    var getViewId = function(inputId){
        var viewId = inputId;
        viewId = viewId.replace(editorPrefix,viewPrefix);
        return viewId;
    };

    /**
     *
     * @param key
     * @param val
     */
    var setLsItem = function (key, val) {
        // add site id to local storage item
        var prefix = getLsPrefix();
        key = prefix + key;

        localStorage.setItem(key, val);
    };

    /**
     *
     * @param key
     */
    var getLsItem = function (key) {
        // remove site id from local storage item
        var prefix = getLsPrefix();
        key = prefix + key;

        return localStorage.getItem(key);
    };

    /**
     *
     * @returns {Array}
     */
    var getLsCollection = function () {
        var collection = [];
        // remove site id from local storage item

        var prefix = getLsPrefix();

        for (var key in localStorage){
            if(localStorage.hasOwnProperty(key) && key.indexOf(editorPrefix) !== -1){
                var collectionKey = key.replace(prefix,'');
                collection[collectionKey] = localStorage[key];
            }
        }

        return collection;
    };

    var getLsPrefix = function () {
        return 'site' + siteId + '_';
    };

    var populateLsData = function () {

        var collection = getLsCollection();

        for (var key in collection){
            if(collection.hasOwnProperty(key)){
                var inputId = key;
                var viewId = getViewId(key);
                var content = collection[key];

                $('#' + inputId).val(content);
                var targetId = $('#' + inputId).data('target');
                //$('#' + viewId).html(content);


                if($('#' + inputId).hasClass('editor-upload')){

                    var targetElement = $('#' + targetId);
                    var tag = targetElement.prop("tagName");

                    if(tag == "A"){
                        targetElement.attr('href',content);
                    }

                    if(tag == "IMG"){
                        targetElement.attr('src',content);
                    }
                }
                else{
                    $('#' + viewId).html(content);
                }
            }
        }
    };

    return {
        init: init,
    };
})(jq172);