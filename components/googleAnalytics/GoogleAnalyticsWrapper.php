<?php

namespace app\components\googleAnalytics;

use Google_Client;
use Google_Service_Analytics;
use Yii;
use yii\base\Component;
use yii\base\View;

class GoogleAnalyticsWrapper extends Component{

    public $analytics;
    public $profile;

    public function init(){
        parent::init();

        $this->analytics = $this->initializeAnalytics();
        //$this->profile = $this->getFirstProfileId();
        $this->profile = '139539854';
    }


    public function initializeAnalytics()
    {
        // Creates and returns the Analytics Reporting service object.

        // Use the developers console and download your service account
        // credentials in JSON format. Place them in this directory or
        // change the key file location if necessary.
        //$KEY_FILE_LOCATION = __DIR__ . '/service-account-credentials.json';
        $KEY_FILE_LOCATION = __DIR__ . '/../../Restoweb-bbaa9421a985.json';

        // Create and configure a new client object.
        $client = new Google_Client();
        $client->setApplicationName("Hello Analytics Reporting");
        $client->setAuthConfig($KEY_FILE_LOCATION);
        $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
        $analytics = new Google_Service_Analytics($client);

        return $analytics;
    }

    public function getFirstProfileId() {
        // Get the user's first view (profile) ID.

        // Get the list of accounts for the authorized user.

        $analytics = $this->analytics;


        $accounts = $analytics->management_accounts->listManagementAccounts();

        if (count($accounts->getItems()) > 0) {
            $items = $accounts->getItems();
            $firstAccountId = $items[0]->getId();

            // Get the list of properties for the authorized user.
            $properties = $analytics->management_webproperties
                ->listManagementWebproperties($firstAccountId);

            if (count($properties->getItems()) > 0) {
                $items = $properties->getItems();
                $firstPropertyId = $items[0]->getId();

                // Get the list of views (profiles) for the authorized user.
                $profiles = $analytics->management_profiles
                    ->listManagementProfiles($firstAccountId, $firstPropertyId);

                if (count($profiles->getItems()) > 0) {
                    $items = $profiles->getItems();

                    // Return the first view (profile) ID.
                    return $items[0]->getId();

                } else {
                    throw new \Exception('No views (profiles) found for this user.');
                }
            } else {
                throw new \Exception('No properties found for this user.');
            }
        } else {
            throw new \Exception('No accounts found for this user.');
        }
    }

    public function getSessions(){
        $data = $this->analytics->data_ga->get(
            'ga:' . $this->profile,
            '7daysAgo',
            'today',
            'ga:sessions');

        return $this->getResults($data);
    }

    public function getUsers(){
        $data = $this->analytics->data_ga->get(
            'ga:' . $this->profile,
            '7daysAgo',
            'today',
            'ga:users');

        return $this->getResults($data);
    }

    public function getPageViews(){
        $data = $this->analytics->data_ga->get(
            'ga:' . $this->profile,
            '7daysAgo',
            'today',
            'ga:pageviews');

        return $this->getResults($data);
    }

    public function getBounceRate(){
        $data = $this->analytics->data_ga->get(
            'ga:' . $this->profile,
            '7daysAgo',
            'today',
            'ga:bounceRate');

        return $this->getResults($data);
    }

    public function getOrganicSearches(){
        $data = $this->analytics->data_ga->get(
            'ga:' . $this->profile,
            '7daysAgo',
            'today',
            'ga:organicSearches');

        return $this->getResults($data);
    }

    public function getPageviewsPerSession(){
        $data = $this->analytics->data_ga->get(
            'ga:' . $this->profile,
            '7daysAgo',
            'today',
            'ga:pageviewsPerSession');

        return $this->getResults($data);
    }

    public function getStats(){
        $stats = [
            'sessions' => $this->getSessions(),
            'users' => $this->getUsers(),
            'pageViews' => $this->getPageViews(),
            'bounceRate' => $this->getBounceRate(),
            'organicSearches' => $this->getOrganicSearches(),
            'pageviewsPerSession' => $this->getPageviewsPerSession(),
        ];

        return $stats;
    }

    /**
     * @param $results
     * @return int
     */
    private function getResults($results){
        if (count($results->getRows()) > 0) {
            $rows = $results->getRows();
            return $rows[0][0];
        } else {
            return 0;
        }
    }
}