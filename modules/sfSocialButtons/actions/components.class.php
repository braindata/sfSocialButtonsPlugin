<?php

/**
 * Description of components
 *
 * @author Manuel
 */
class sfSocialButtonsComponents extends sfComponents {

    public function executeSocialButtons() {
        $url = $this->getRequest()->getUri();
        
        // GET FACEBOOK LIKES
        $fbstring = file_get_contents('https://graph.facebook.com/?ids=' . $url);
        $fbarray = json_decode($fbstring, true);
        if (isset($fbarray[$url]['shares'])) {
            $this->likes = intval($fbarray[$url]['shares']);
        } else {
            $this->likes = 0;
        }
        // GET TWITTER RETWEETS
        $twstring = file_get_contents('http://urls.api.twitter.com/1/urls/count.json?url=' . $url);
        $twarray = json_decode($twstring, true);
        $this->tweets = intval($twarray['count']);

        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_HTTPHEADER => array('Content-type: application/json'),
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"' . $url . '","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_URL => 'https://clients6.google.com/rpc?key=AIzaSyCKSbrvQasunBoV16zDH9R33D88CeLr9gQ'
        ));
        $res = curl_exec($ch);
        curl_close($ch);
        // GET GOOGLE+ PLUS1s
        if ($res) {
            $json = json_decode($res, true);
            $this->plus = $json[0]['result']['metadata']['globalCounts']['count'];
        }
        return false;

    }

}

?>
