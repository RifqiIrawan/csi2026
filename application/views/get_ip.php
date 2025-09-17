<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script type="text/javascript">  
    $(document).ready(function() {      
		$.getJSON('https://ipinfo.io/json', function(data) {
            var ip = JSON.stringify(data["ip"], null, 2);
            var city = JSON.stringify(data["city"], null, 2);
            var country = JSON.stringify(data["country"], null, 2);
            var loc = JSON.stringify(data["loc"], null, 2);
            var org = JSON.stringify(data["org"], null, 2);
            var timezone = JSON.stringify(data["timezone"], null, 2);
            //console.log(JSON.stringify(data, null, 2));
            //console.log(ip+" - "+city+" - "+country+" - "+loc+" - "+org+" - "+timezone);

            $.ajax({
                url: "<?php echo base_url()?>Login/save_ip_visitor",
                type: 'post',
                data: {ip : ip, city : city, country : country, loc : loc, org : org, timezone : timezone},
                success: function (data) {
                    console.log(data);      
                }
            });  
        });


        // var pairs = document.cookie.split(";");
        // var cookies = {};
        // for (var i=0; i<pairs.length; i++){
        //     var pair = pairs[i].split("=");
        //     cookies[(pair[0]+'').trim()] = unescape(pair.slice(1).join('='));
        // }
        //     $.ajax({
        //         url: "<?php echo base_url()?>Login/save_ip_visitor_test",
        //         type: 'post',
        //         data: {test : cookies},
        //         success: function (data) {
        //             console.log(data);      
        //         }
        //     });  
        //console.log(c);




        // const cookieObject = document.cookie.split(';')
        //     .map(kv => kv.split('='))
        //     .map(kv => [ kv[0].trim(), decodeURIComponent(kv[1]) ])
        //     .reduce((o,kv) => { o[kv[0]] = kv[1]; return o; },{})
        //     ;
        
        // console.log(cookieObject);
        // const userSiteInfo = JSON.parse(cookieObject["SiteUserInfo"]);
        // const userFirstName = userSiteInfo["firstName"];
        // const userId = userSiteInfo["siteUserId"];
        // const xsrf1 = cookieObject["crumb"];
        // const xsrf2 = cookieObject["siteUserCrumb"];
        // const profileURL = "/api/site-users/account/profile";
        // const headers = { "x-csrf-token": xsrf1, "x-siteuser-xsrf-token": xsrf2 };
        // fetch(profileURL, { headers })
        //     .then(r => r.json())
        //     .then(j => {
        //         const userEmailAddress = j.email;
        //         const userLastName = j.name.lastName;
        //         console.log(j,userId, userFirstName, userLastName, userEmailAddress);  
        //         // do whatever you want with your data here
        //         // but be very careful with peoples personal data!!!
        //     });

        // let c = document.cookie.split(";").reduce( (ac, cv, i) => Object.assign(ac, {[cv.split('=')[0]]: cv.split('=')[1]}), {});
        // console.log(c);

        // var gaUserId = document.cookie.match(/_ga=(.+?);/)[1].split('.').slice(-2).join(".");
        // console.log(gaUserId);
        
        

    });  
</script>