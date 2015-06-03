@extends('wrapper')

@section('content')
    <div class="page-jailhouse">
        <div class="container">
            <div class="content">
                <!--<div class="register">
                    Don't have an account? <a href="/auth/register">Sign up now</a>
                </div>-->
                <div class="title">
                    <span class="logo">Jailhouse Rock</span>
                </div>
                <div class="sponsor">
                    <span class="plus">+</span>
                    <span class="logo"></span>
                </div>
                <div class="quote">
                    <span>
                        Jailhouse is an almost entirely fixed gear crag, meaning every bolt has a fixed draw.
                        Your donations will be used to buy bolts, hangers, steel carabiners, static ropes, and other gear to replace worn and broken equipment, keeping the crag accessible to all.
                        <b>Special thanks to Planet Granite, who will be matching up to $1000 for this fund!</b>
                    </span>
                </div>
                <div class="special">
                    Photo credits go to: <a href="http://www.christian-adam.com" target="_blank">christian-adam.com</a> Instagram: <a href="http://instagram.com/christian_adam_" target="_blank">christian_adam_</a>
                </div>
                <div class="paypal">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="LSP7T7HK83KRL">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div>
                <!--@include('auth/login')-->
            </div>
        </div>
    </div>
@endsection