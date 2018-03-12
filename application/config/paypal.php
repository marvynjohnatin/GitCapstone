<?php
/** set your paypal credential **/

$config['client_id'] = 'Adcehaj9hRIlN29T4t4kkno_DRywMQhKWDNqSd0uwcXZQx0fcYAcBU3xaBqyB7wdX6hnyO8MtVSSdP2N';
$config['secret'] = 'ELPRAmNkfwu3-ymJPYoF7lmMRDdp4OQx79g9jjcFzVF4aalmnz2ZvHlxF16JEob9lAfyxFHEqTBdSGed';

/**
 * SDK configuration
 */
/**
 * Available option 'sandbox' or 'live'
 */
$config['settings'] = array(

    'mode' => 'sandbox',
    /**
     * Specify the max request time in seconds
     */
    'http.ConnectionTimeOut' => 1000,
    /**
     * Whether want to log to a file
     */
    'log.LogEnabled' => true,
    /**
     * Specify the file that want to write on
     */
    'log.FileName' => 'application/logs/paypal.log',
    /**
     * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
     *
     * Logging is most verbose in the 'FINE' level and decreases as you
     * proceed towards ERROR
     */
    'log.LogLevel' => 'FINE'
);
