<style>
    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #404040;
        font-size: 14px;
        font-weight: 300;
        line-height: 22px;
        letter-spacing: .4px;
        background: #eee;
        padding-top: 30px;
    }

    .card {
        display: inline-block;
        box-shadow: 0 1px 2px 0 rgba(0,0,0,.15);
        margin: 20px;
        position: relative;
        margin-bottom: 50px;
        transition: all .2s ease-in-out;
    }

    .card:hover {
        /*box-shadow: 0 5px 22px 0 rgba(0,0,0,.25);*/
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        margin-bottom: 54px;
    }

    .image {
        height: 200px;
        opacity: .7;
        overflow: hidden;
        transition: all .2s ease-in-out;
    }

    .image:hover,
    .card:hover .image {
        height: 200px;
        opacity: 1;
    }

    .text {
        background: #FFF;
        padding: 20px;
        min-height: 200px;
    }

    .text p {
        margin-bottom: 0px;
    }

    .fab {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        position: absolute;
        margin-top: -50px;
        right: 20px;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, .3);
        color: #fff;
        font-size: 48px;
        line-height: 48px;
        text-align: center;
        background: #0066A2;
        -webkit-transition: -webkit-transform .2s ease-in-out;
        transition: transform .2s ease-in-out;
    }

    .fab:hover {
        background: #549D3C;
        cursor: pointer;
        -ms-transform: rotate(90deg);
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
</style>

<style>
    @import url(https://fonts.googleapis.com/css?family=RobotoDraft:400,500,700,300);
    .toolbar {height:64px;background:#03A9F4}
    .tabs {padding-top:14px}
    .tabs ul {list-style:none;margin:0;width:100%;overflow:hidden;padding:0;margin-left:16px;}
    .tabs ul li {float:left;width:100px}
    .tabs a {position:relative;color:white;text-decoration:none;display:block;width:100px;height:50px;text-align:center;line-height:52px;font-weight:700;font-size:14px;color:rgba(255,255,255,0.6);overflow:hidden;}
    .tabs .active a {color:white;}
    .tabs .active a:after {height:2px;width:100%;display:block;content:" ";bottom:0px;left:0px;position:absolute;background:#FFFF8D;
        -webkit-animation: border-expand 0.2s cubic-bezier(0.4, 0.0, 0.4, 1) 0s alternate forwards;-moz-animation: border-expand 0.2s cubic-bezier(0.4, 0.0, 0.4, 1) 0s alternate forwards;transition:all 1s cubic-bezier(0.4, 0.0, 1, 1);}
    .tabs a span {position:absolute;margin-left:-40px;margin-top:-24px;width:80px;background:rgba(255,255,141,1);height:100%;display:block;border-radius:50%;opacity:0;}
    .tabs a span.clicked {-webkit-animation: expand 0.6s cubic-bezier(0.4, 0.0, 0.4, 1) 0s normal;-moz-animation: expand 0.6s cubic-bezier(0.4, 0.0, 0.4, 1) 0s normal;border-bottom:2px solid #FFFF8D;}
    .content {box-shadow:inset 0px 5px 6px -3px rgba(0, 0, 0, 0.4);height:auto;padding-top:50px;position:relative;top:0px;overflow:hidden;}
    .item {background:white;width:440px;padding-bottom:30px;margin:0 auto 2em;}
    .itemhead {padding:30px;overflow:hidden;position:relative;}
    .itemhead img {border-radius:100%;float:left}
    .itemhead h2 {font-weight:400;float:left;margin-left:20px;}
    .itemhead .heart {cursor:pointer;position:absolute;right:4px;top:4px;padding:7px;border-radius:2px}
    .item p:first-of-type {margin-top:0}
    .item p {padding:0px 30px;font-size:19px;line-height:26px;margin:0;margin-top:1em;}
    .item a {text-decoration:none;color:#00bcd4;font-weight:500;font-size:0.8em;}

    .heart:hover {box-shadow:0 1px 0 0 rgba(0, 0, 0, 0.12), 0 0 0 1px rgba(0, 0, 0, 0.1)}
    .heart #favorite {fill:#636363}
    .heart.active #favorite {fill:#DA4336;}

    .box {display:none;overflow:auto;position:relative;overflow-x:hidden;margin-right: 10px;}
    .box.show {display:block;}

    @-webkit-keyframes expand {
        0% {
            background:rgba(255,255,141,1);
            opacity:1;
            border-radius:100%;
            transform: scale(0);
            -webkit-transform: scale(0);
            -moz-transform:scale(0);
        }
        50% {
            background:rgba(255,255,141,0.8);
            border-radius:50%;
        }
        100% {
            background:rgba(255,255,141,0);
            transform: scale(3);
            border-radius: 0;
            -webkit-transform: scale(3);
            -moz-transform:scale(3);
            opacity:1;
        }
    }
    @-moz-keyframes expand {
        0% {
            background:rgba(255,255,141,1);
            opacity:1;
            border-radius:100%;
            transform: scale(0);
            -moz-transform:scale(0);
        }
        50% {
            background:rgba(255,255,141,0.8);
            border-radius:50%;
        }
        100% {
            background:rgba(255,255,141,0);
            transform: scale(3);
            border-radius: 0;
            -moz-transform:scale(3);
            opacity:1;
        }
    }
    @-webkit-keyframes border-expand {
        0% {
            opacity:0;
            width:0;
        }
        100% {
            opacity:1;
            width:100%;
        }
    }
    @-moz-keyframes border-expand {
        0% {
            opacity:0;
            width:0;
        }
        100% {
            opacity:1;
            width:100%;
        }
    }
</style>