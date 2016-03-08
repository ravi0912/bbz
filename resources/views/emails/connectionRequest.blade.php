<html>
<body>

<table style="border:1px solid #a1a1a1;font-family:Raleway">
    <tr><!--header row-->
        <td style="height:80px;width:500px;background-color: #3C97D3;">
            <table style="width:100%" cellspacing="2">
                <tr>
                    <td style="height:70px;width:70px;background-color: #fff;background-color:#3C97D3">
                        <img src="http://www.buildblockz.com/images/logo/BBZlogo/bbzlogo_white.png" alt="0" height="60px" width="70px"/>
                    </td>
                    <td style="height:60px;width:450px;" align="right">
                        <table>
                            <tr>
                                <td style="height:60px;width:190px;text-align:right"><span style="font-size: 20px;color:#fff;font-weight:bold">{{ $user->name }}</span></td>
                                <td style="border-radius:100%;height:60px;width:60px;text-align:center">
                                    <img src="http://www.buildblockz.com/uploads/thumbnails/{{ $user->id }}.jpeg" alt="0" class="image_dimension" style="height:30px;width:29px;border-radius:100%;"/>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr><!--body row whick contains another table-->
        <td id="body" style="background-color: #fff" style="height:300px;width:500px;">
            <table style="height:280px;width:460px;">
                <tr style="height:80px;width:98%;"><!--inner table header-->
                    <td>
                        <table>
                            <tr>
                                <td style="border-radius:100%;height:60px;width:60px;text-align:center;">
                                    <img src="http://www.buildblockz.com/uploads/thumbnails/{{ auth()->user()->id }}.jpeg" alt="0" style="height:45px;width:45px;border-radius:100%;"/>
                                </td>
                                <td style="text-align:left;height:60px;width:200px;"><span style="margin-left:5px;font-size:20px;font-weight:bold">{{ auth()->user()->name }}</span></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="wrapper" style="height:180px;width:97%;text-align:center;border-bottom:1px solid #a1a1a1" valign="top">

                        <p style="line-height: 210%;margin-top: 0px;margin-left:10px">{{ auth()->user()->name }} has invited you to connect on Buidblockz.<br>
                            Designation :  {{ auth()->user()->designation  }}.
                        </p>
                        <div style="text-align:left;padding-left:180px ; ">
                            <a href="http://www.buildblockz.com" target="_blank">
                                <button style="color:#fff;background-color:#3C97D3;width:80px;height:40px">
                                    Go to Buildblockz
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td style="background-color: #fff;height:200px;width:500px;">
            <table>
                <!-- <tr>
                    <ul>
                        <li style="display: inline;padding:10px;"><a href="#" style="border-right: 2px solid blue;padding-right:5px;color:#6262ff;text-decoration: none;">Frequency</a></li>
                        <li style="display: inline;padding:10px;"><a href="#" style="border-right: 2px solid blue;padding-right:5px;color:#6262ff;text-decoration: none;">Unsubscribe</a></li>
                        <li style="display: inline;padding:10px;"><a href="#" style="border-right:none;border-right: 2px solid blue;padding-right:5px;color:#6262ff;text-decoration: none;">Help</a></li>
                    </ul>
                </tr> -->
                <tr>
                    <td>
                        <p style="line-height: 170%">
                            This email was intended for {{ $user->name }} via (<a href="http://www.buildblockz.com" target="_blank">www.buildblockz.com</a>) <copyright> &copy;Buildblockz 2016 All rights reserved.</copyright>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="width:460px;">
                        <p>Buildblockz.com is an online service provider, a professional networking platform serving the real estate and construction industry. With the help of its two very unique tools, workstation and marketplace, it focuses on providing a complete solution to all the professionals in the industry, builders, architects, interior designers, and consultants to name a few.</p>
                        <!-- <span><a href="#" style="color:#6262ff;text-decoration: none">Learn why we included this.</a></span> -->
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;height:40px;width:100px;">

                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>


</body>
</html>