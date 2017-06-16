<?php
/**
 * Created by PhpStorm.
 * User: SEANG AY
 * Date: 6/14/17
 * Time: 11:20 AM
 */

/**
 *  Example send e-mail
 */
    $to = "seangay1993@gmail.com";
    $subject = "Hello!";
    $body = "Hello,\n\nHow are you?";
    /**នៅខុសត្រង់ display ត្រឹមនេះចុះក្រោម ជួយ check ផង*/
    if (mail($to, $subject, $body)) {
        echo("<p>Email successfully sent!</p>");
    } else {
        echo("<p>Email delivery failed…</p>");
    }

?>