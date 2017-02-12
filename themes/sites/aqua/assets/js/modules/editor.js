/**
 * Created by antonshell on 10.02.2017.
 */

var editor = (function() {

    var editorPrefix = 'editor-';
    var viewPrefix = 'view-';

    var init = function () {
        initInputs();
        populateLsData();
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
        localStorage.setItem(key, val);
    };

    /**
     *
     * @param key
     */
    var getLsItem = function (key) {
        return localStorage.getItem(key);
    };

    /**
     *
     * @returns {Array}
     */
    var getLsCollection = function () {
        var collection = [];

        for (var key in localStorage){
            if(localStorage.hasOwnProperty(key) && key.indexOf(editorPrefix) !== -1){
                collection[key] = localStorage[key];
            }
        }

        return collection;
    };

    var populateLsData = function () {
        var collection = getLsCollection();

        for (var key in collection){
            if(collection.hasOwnProperty(key)){
                var inputId = key;
                var viewId = getViewId(key);
                var content = collection[key];

                $('#' + inputId).val(content);
                $('#' + viewId).html(content);
            }
        }
    };

    return {
        init: init,
    };
})();