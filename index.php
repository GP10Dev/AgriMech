<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgriMech Solutions</title>

    <link href="./static/css/index.css" rel="stylesheet" />
    <link href="./static/css/partners.css" rel="stylesheet" />
    <link href="./static/css/home.css" rel="stylesheet" />
</head>
<body>
    <header>
        <?php require "./includes/header.html" ; ?>
    </header>
    <!-- main -->
    <section class="main">
        <div id="scn1">
            <div>
                <h2>Service - Repair - Replace</h2>
                <button>Call us now</button>
            </div>
        </div>
        <div id="scn2">
            <h2>Service and Repairs</h2>
            <table>
                <tr>
                    <td class="topCol">
                        <img src="./static/img/istockphoto-1205782415-612x612.jpg" alt="service pic agri Mech"/>
                    </td>
                    <td class="topCol">
                        <img src="./static/img/istockphoto-595097686-612x612.jpg" alt="Replace pic agri Mech"/>
                    </td>
                    <td class="topCol">
                        <img src="./static/img/onfarm_repair.jpg" alt="repair pic agri Mech"/>
                    </td >
                </tr>
                <tr>
                    <td class="subhead">service</td>
                    <td class="subhead">Replace</td>
                    <td class="subhead">Repair</td>
                </tr>
                <tr>
                    <td class="">
                        <p>We pride ourselves in the quality of our repair work and our passion for farm machinery. Since 2001 we have expertly restored many vintage and cherished tractors. If you have an antique tractor that needs restoring, we can help.</p>
                    </td>
                    <td class="">
                        <p>We are able to supply new farming equipment from a large list of dealers. We have many items in stock for sale, including the Landini range of tractors, new and used tractors, ATVs and farm machinery. </p>
                    </td>
                    <td class="">
                        <p>We provide a fast, reliable service to repair and service ALL agricultural machinery at competitive prices.  </p>
                    </td>
                </tr>
                <tr>
                    <td class="endRow"><a href="./services.php"><span class="more">Find out more</span></a></td>
                    <td class="endRow"><a href="./services.php"><span class="more">Find out more</span></a></td>
                    <td class="endRow"><a href="./services.php"><span class="more">Find out more</span></a></td>
                </tr>
            </table>
        </div>
        <div id="scn3">
            <p>Since 2022, AgriMech Solutions has been supporting the farming community in Banda and surrounding areas, by providing top quality servicing and repairs to tractors and all types of farm vehicles and equipment. Our experienced and skilled team of mechanics have been able to do this either at our customer's premises or at our workshop.</p>
            <p>We also are main dealers for a wide range of farming equipment, including the amazing range of Landini tractors. So whether you need to Repair, Replace or Restore, give us a call on  +256706083050</p>
        </div>
        <div id='partnes'>
            <h3 style="text-align: center;">Our Partners</h3>
            <?php include "./includes/partners.html" ; ?>
            <div class="cls"></div>
        </div>
    </section>
    <!-- end main -->
    <footer>
        <?php require "./includes/footer.html" ; ?>
    </footer>
    <script src="./static/js/navhover.js"></script>
</body>
</html>