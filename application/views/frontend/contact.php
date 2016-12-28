<div class="container">
    <div class="center">
        <h1 class="offino">
            Office Info
        </h1>
        <div class="sitelist">
            <div class="site">
                <h2 class="title">Hong Kong</h2>
                <ul>
                    <li>
                        <div class="iconblock">
                            <i class="icon address"></i>
                        </div>
                        <div class="text">Level 11, No. 136 Des Voeux Road Central</div>
                    </li>
                    <li>
                        <div class="iconblock">
                            <i class="icon email"></i>
                        </div>
                        <div class="text">info@dennings.org</div>
                    </li>
                    <li>
                        <div class="iconblock">
                            <i class="icon tel"></i>
                        </div>
                        <div class="text">+852 3478 3957</div>
                    </li>
                </ul>
            </div>
        
            <div class="site">
                <h2 class="title">Taiwan(Kaohsiung)</h2>
                <ul>
                    <li>
                        <div class="iconblock">
                            <i class="icon address"></i>
                        </div>
                        <div class="text">Level 12, No. 56, Minsheng 1st Rd, Xinxing Dist, Kaohsiung City.</div>
                    </li>
                    <li>
                        <div class="iconblock">
                            <i class="icon email"></i>
                        </div>
                        <div class="text">info@dennings.org</div>
                    </li>
                    <li>
                        <div class="iconblock">
                            <i class="icon tel"></i>
                        </div>
                        <div class="text">+886 7 222 1597</div>
                    </li>
                </ul>
            </div>
            
        </div>
        
        <form class="form1" method="post" action="app/contact/index">
            <div class="desc">
                When you submit this request, all the data will be sent to 
                <a href="mailto:info@dennings.org" title="info@dennings.org">info@dennings.org</a>
            </div>
        
            <ul>
                <li class="fir">
                    <div class="title">Name</div>
                    <input type="text" name="name" class="inputstyle userdata" required>
                </li>
                <li class="fir">
                    <div class="title">E-Mail</div>
                    <input type="email" name="email" class="inputstyle userdata" required>
                </li>
                <li class="fir">
                    <div class="title">Country</div>
                    <input type="text" name="country" class="inputstyle userdata" required>
                </li>
                <li class="fir">
                    <div class="title">Phone</div>
                    <input type="tel" name="phone" class="inputstyle userdata" required>
                </li>
                <li class="sec">
                    <div class="title">Theme</div>
                    <select name="theme" class="inputstyle userdata" required>
                        <option value="Service">- Service</option>
                    </select>
                </li>
                <li class="thi">
                    <div class="title"> </div>
                    <select name="bc" class="inputstyle userdata" required>
                        <option value="Business Consulting">- Business Consulting</option>
                    </select>
                </li>
                <li class="fullgrid">
                    <div class="title">Message</div>
                    <textarea name="message" class="message"></textarea>
                </li>
            </ul>
        
            <div class="btsite">
                <button class="submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>