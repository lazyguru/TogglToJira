<?php
/**
 * Executes process to get tasks from Toggl and create worklogs in Jira
 *
 * @author Joe Constant <jconstant@alpineinc.com>
 * Date: 7/29/14
 * Time: 10:45 PM
 */
require_once 'vendor/autoload.php';

$ttj = new TogglToJira();
$rundate = null;
$enddate = null;
if ($argc > 1) {
    $rundate = $argv[1];
    $enddate = $rundate;
}
if ($argc > 2) {
    $enddate = $argv[2];
}
$ttj->run($rundate, $enddate);
