            <footer class="footer ">
                <ul class="menu">
                    <li><a href="">Dennings © 2016</a></li>
                    <li><a href="pt"><?=$translg->{$langkey}->menu->privacy_polity?></a></li>
                    <li><a href="pt?onload=switch&target=a2"><?=$translg->{$langkey}->menu->terms_of_service?></a></li>
                    <li><a href="contact"><?=$translg->{$langkey}->menu->contact_us?></a></li>
                </ul>
                <div class="ct" href="">
                    <div class="center">
                        <i class="flag" style="background-image: url('images/global/flag-HG.png')"></i>
                        <div class="text">
                            <select class="lang">
                                <option value="english" <? if ($langkey == "english") echo "selected"; ?>>Hong Gong</option>
                                <!-- <option value="cn" <? if ($langkey == "cn") echo "selected"; ?>>简体中文</option> -->
                                <!-- <option value="zh" <? if ($langkey == "zh") echo "selected"; ?>>正體中文</option> -->
                            </select>
                        </div>
                    </div>
                    <div class="clear_both"></div>
                </div>
                <div class="link">
                    <a class="btn" target="_blank" href="https://www.facebook.com/Dennings-1686157291633610">
                        <i class="f" style=""></i>
                    </a>
                    <a class="btn" target="_blank" href="https://www.linkedin.com/company/dennings-limited">
                        <i class="in" style=""></i>
                    </a >
                    <a class="btn" target="_blank" href="https://twitter.com/DenningsLimited">
                        <i class="tw" style=""></i>
                    </a>
                </div>
            </footer>
        </div>
        

        
        
    </div>
    


    <!-- 版面偵測使用 -->
    <ul class="current_screen">
        <li class="mobile"></li>
        <li class="pad"></li>
        <li class="desktop"></li>
    </ul>
</body>
</html>