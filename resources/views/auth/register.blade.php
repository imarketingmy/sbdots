@include('front.header')
<div class="content">
    <div class="container">
        <div class="page-content">
        
            <div class="register">
                <div class="title-wrap">
                    <div class="outer-mask">
                        <div class="inner-mask">
                            <div class="title-p">
                                <h2>registration</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="r-content">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <p>Please introduce yourself:</p>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-register">
                            <tr>
                                <td>
                                    <input name="name" type="text" id="name" placeholder="Full Name" autocomplete="name" class="field-register" onkeyup="nospaces(this)" />
                                </td>
                                <td class="col-2">&nbsp;</td>
                                <td><span class="text-error">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="phone" type="text" placeholder="60123456789" class="field-register" autocomplete="tel-national" />
                                </td>
                                <td class="col-2">Please provide a valid Contact Number for future promotion and payment correspondences.</td>
                                <td><span class="text-error">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="password" type="password" autocomplete="new-password" placeholder="Password" class="field-register" />
                                </td>
                                <td class="col-2">Minimum 6 alphamumeric (A-Z, a-z, 0-9) character only.</td>
                                <td><span class="text-error">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="password_confirmation" type="password" autocomplete="new-password" placeholder="Confirm Password" class="field-register" />
                                </td>
                                <td class="col-2">&nbsp;</td>
                                <td><span class="text-error">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="email" type="email" autocomplete="email" placeholder="Email Address" class="field-register" />
                                </td>
                                <td class="col-2">&nbsp;</td>
                                <td><span class="text-error">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 375px;">
                                    <div class="g-recaptcha" data-sitekey="6LdrOUoUAAAAAO3ICDvvbpAnGFz55RoADJ1YP4Vt"></div>
                                </td>
                                <td class="col-2">
                                    <table>
                                    </table>
                                </td>
                                <td><span class="text-error">
                                    </span>
                                </td>
                            </tr>
                        </table>
                    
                </div>
                <div class="clearfix">
                    <input type="submit" name="btnsend" value="Submit" id="btnsend" class="btn btn-warning btn-more pull-right" />
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</div>    
@include('front.footer')
</body></html>