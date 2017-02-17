<div id=topPart class=container-fluid>
    <div id=topLogos class=row>
        <div class="col col-xs-12" >
            ΜΙΑ ΠΛΑΤΦΟΡΜΑ ΤΗΣ <a href="http://www.example.gr/something" target="_blank"><img src="/images/parentLogo.png" style="width:54px;"></a> ΓΙΑ ΤΟ ΠΡΟΓΡΑΜΜΑ <a href="http://www.example.gr/something" target="_blank"><img src="/images/myLogo.png" style="width:48px;"></a>
        </div>
    </div>
    <div id=brandAndMenu class="row">
        <div id=brand class='col col-sm-4'>  <router-link to="/"><img src="/images/logo.png"></router-link> </div>
        <div id=topMenuWrap  class='hidden-xs'>
            <ul id="topMenu">
                <li id="pageabout"><router-link to="/page/about">About</router-link></li>
                <li id="pageworks"><router-link to="/page/howitworks">HOW IT WORKS</router-link></li>
                <li id="pagedonors"><router-link to="/page/donate">DONATE</router-link></li>
                <li id="pageregister"><router-link to="/page/register/">Launch</router-link></li>
                <li class="dropdown" id="pagemore">
                    <a tabindex="-1" href="#" data-toggle="dropdown" class="dropdown-toggle">More</a>
                    <ul class="dropdown-menu " style="margin-left: -60px; margin-top: 22px;">
                        <li><router-link tabindex="-1" to="/page/team">TEAM</router-link></li>
                        <li><router-link tabindex="-1" to="/page/partners">PARTNERS</router-link></li>
                        <li><router-link tabindex="-1" to="http://oneupgr.tumblr.com/" target="_blank">BLOG</router-link></li>
                        <li><router-link tabindex="-1" to="/page/faq">FAQs</router-link></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id=topActionsWrap class='pull-right'>
            <ul id=topActions class="pull-right">
                <li  class="searchwrap">
                    <form class="form-search" method="POST" action="/search">
                            <div class="searchwform" style='background-color: red; '>
                                <input name="query" type="text" class="search-query"  placeholder="Search">
                                <input id=search type="submit" class="search-btn" value="" >
                            </div>
                    </form>
                </li>
                <li class="loginlink"><a id="navbar-login" href="/simple-login">LOGIN</a></li>
                <li class="dropdown" ><a href="#" class="dropdown-toggle" data-toggle="dropdown">Language <b class="caret"></b> </a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="/homepage?request_locale=en">English</a></li>
                        <li><a href="/homepage?request_locale=el">Greek</a></li>
                    </ul>
                </li>
            </ul>

      </div>   <!-- actions -->
    </div> <!-- brandAndMenu -->
</div> <!-- topPart -->


@push('scripts')

<script type="text/javascript">

    $(document).ready(function() {
        $('.searchwrap').on({
            'mouseenter':function(){
               $('.search-query').animate({width: 200,
                                          'box-shadow':'0px 0px 0px rgba(0, 0, 5, 0.065) inset',
                                          'border-left':'2px solid black' },500);
            },
            'mouseleave':function(){
                $('.search-query').animate({width: 0,'box-shadow': "0 0px 0px rgba(255, 255, 255, 0.0)", 'border':"none"  },500);
            }
        });
    });

</script>

@endpush
