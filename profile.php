
<?php include("db_connection.php");

      $query  = "SELECT * FROM register_form_db";
	  $data   = mysqli_query($connection, $query);
	  $total  = mysqli_num_rows($data);
	  $result = mysqli_fetch_assoc($data);
	  
	  echo "$result[Username]"." "."$result[Phone]"." "."$result[Email]"." ".
	       "$result[Account]"." "."$result[IFSCcode]";
	  
	  //echo $total;
	  
	  if($total != 0)
	  {
		  echo "Table has Records";
	  }
	  else 
	  {
		  echo "No records found";
	  }

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title></title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
      <!-- Icon Font Stylesheet -->
      <link href="all.min.css" rel="stylesheet">
      <link href="bootstrap-icons.css" rel="stylesheet">
      <!-- Libraries Stylesheet -->
      <link href="animate.min.css" rel="stylesheet">
      <link href="owl.carousel.min.css" rel="stylesheet">
      <link href="tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
      <!-- Customized Bootstrap Stylesheet -->
      <link href="bootstrap.min.css" rel="stylesheet">
      <!-- Template Stylesheet -->
      <link href="style.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="publisher" href="https://plus.google.com/b/112795119140865328446/+GrowwIn?">
      <link nonce="Q8Du3PPJ/Ovz+SU4JkEAefYTL0rI/lNbw5xSlw1+nS4=" rel="stylesheet" href="64f41e5940f5b6e4.css" data-n-g="">
      <link nonce="Q8Du3PPJ/Ovz+SU4JkEAefYTL0rI/lNbw5xSlw1+nS4=" rel="stylesheet" href="0f9320909440a329.css" data-n-p="">
      <link nonce="Q8Du3PPJ/Ovz+SU4JkEAefYTL0rI/lNbw5xSlw1+nS4=" rel="stylesheet" href="fe593a78e0ea185b.css" data-n-p="">
      <link nonce="Q8Du3PPJ/Ovz+SU4JkEAefYTL0rI/lNbw5xSlw1+nS4=" rel="stylesheet" href="b9ee165362c4219f.css" data-n-p="">
      <style data-n-href="8b4dc0ae242ae0f3.css" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=">.bd66Box{padding:30px 15px;width:100%}.bd66LeftInp{width:90%;float:left}.bd66RightInp{width:90%;float:right}.bd66BackImg{position:absolute;height:100%;width:auto;top:0;right:0}.bd66InpSt{letter-spacing:.8px}.pr12BigBox{margin-top:60px}.pr12LeftBox{position:relative;width:290px;padding:0 0 30px;float:left}.pr12ImgNameDiv{height:190px;flex-direction:column;justify-content:center}.pr12ImageCircle{width:100px;height:100px;box-shadow:0 0 10px var(--tempBoxShadow)}.pr12AccountCircle{padding-top:0;color:var(--gray700);font-size:100px!important;max-width:100px;max-height:100px}.pr12AuthName{margin-top:18px;height:20px}.pr12ProfMenu{padding:18px 16px;justify-content:space-between;color:var(--gray900)}.pr12ProfMenu:hover{color:var(--green500)!important;background:var(--green100)}.pr12ProfMenuSelected{color:var(--green500);background:var(--green100)}.pr12Icon{font-size:20px;color:var(--gray900);max-width:20px;max-height:20px}.pr12IconSelected,.pr12ProfMenu:hover .pr12Icon{color:var(--green500)!important}.pr12IcBox{max-height:19px;max-width:19px}.pr12RightBox{position:relative;width:calc(100% - 330px);float:right}.pr12Loader{width:100%;margin:200px auto 0}.pr12IconLoader{border-color:var(--gray900);border-right-color:var(--tempTransparent)}.pr12IconLoaderSelected,.pr12ProfMenu:hover .pr12IconLoader{border-color:var(--green500);border-right-color:var(--tempTransparent)}.pr12HighlightTab{height:14px;min-width:14px;border-radius:50%;opacity:.7;margin-left:auto;margin-right:10px}.pr12HighlightTabWarning{background:var(--yellow500)}.pr12HighlightTabError{background:var(--red500)}</style>
      <script defer="" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" nomodule="" src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/polyfills-c67a75d1b6f99dc8.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/webpack-ae2f2e5a8ebc33e9.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/framework-3f4adea299755495.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/main-058b31e418e1964c.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/_app-9be98af93bd00b21.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/5557-4ab8a1f84ba6db5f.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/92842-ce5318f3ad37e72f.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/40559-7ae8d45fbc506d0c.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/94302-ceeabe157abf96ca.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/57295-1816599a12f2522a.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/5390-40d0a0ff61cd986b.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/13333-82554fa6406fe899.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/24511-bd093ad2d72d7345.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/69015-452c0206364d4cb6.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/94907-fe06c4a038e8587c.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/30833-bef9c3e8955379f7.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/45050-367284a17f57e98c.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/10368-c5dec4e4fc45070b.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/70183-0a7b8b991f5a95d0.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/89595-3b59dc1c3fd8dd93.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/6487-592692b7523b9cb9.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/84549-5a00632bcd8a04b7.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/82343-3b4e749794756ca9.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/stocks/user/explore-14acdc8242564931.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/6CxRZMUk3QDt3PKBPwEAA/_buildManifest.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/6CxRZMUk3QDt3PKBPwEAA/_ssgManifest.js" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" defer=""></script>
      <style></style>
      <link rel="stylesheet" type="text/css" href="3cafa6fdd2ca17dd.css">
      <link as="script" rel="prefetch" href="9373-c9332d0c4b4c1286.js">
      <link as="script" rel="prefetch" href="49065-ba0566dacca6bf6b.js">
      <link as="script" rel="prefetch" href="8722-216743aa3374dcf5.js">
      <link as="script" rel="prefetch" href="35679-bf1769f1955ce9c7.js">
      <link as="script" rel="prefetch" href="18647-bf0230c844354cf3.js">
      <link as="script" rel="prefetch" href="investments-a49c9ce84bdeabab.js">
      <link as="script" rel="prefetch" href="81396-35604332c8309891.js">
      <link as="script" rel="prefetch" href="indices-35bd3ce783c6fadc.js">
      <link as="script" rel="prefetch" href="64740-1bfd751362212dd8.js">
      <link as="script" rel="prefetch" href="explore-b099e8498bb8e899.js">
      <link as="script" rel="prefetch" href="21632-c85e3d5acd73040d.js">
      <link as="script" rel="prefetch" href="11074-2eb39b9dcac1c42f.js">
      <link as="script" rel="prefetch" href="ipo-fdd0431d9c652f52.js">
      <link as="script" rel="prefetch" href="intraday-f5cb4094a083706c.js">
      <link as="script" rel="prefetch" href="67241-9ecf7d4e9087e0ec.js">
      <link as="script" rel="prefetch" href="92930-7415520be6596380.js">
      <link as="script" rel="prefetch" href="filter-bff0155adf8ef4b8.js">
      <link as="script" rel="prefetch" href="99353-b8999a8670ad3e38.js">
      <link as="script" rel="prefetch" href="26857-ad86fde7e640c3a7.js">
      <link as="script" rel="prefetch" href="top-gainers-b0552421c1d74244.js">
      <link as="script" rel="prefetch" href="top-losers-d964510b0ca1fafb.js">
      <link as="script" rel="prefetch" href="63429-c8f10aa70810a479.js">
      <link as="script" rel="prefetch" href="59089-1cd5edab052e6900.js">
      <link as="script" rel="prefetch" href="71597-f9adee65e0f2ce95.js">
      <link as="script" rel="prefetch" href="%5Bcompany-search-id%5D-d55044a7dc9084d6.js">
      <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
      <script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/860464209/?random=1692589848210&amp;cv=11&amp;fst=1692589848210&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45He38g0&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Fgroww.in%2Fstocks%2Fuser%2Fexplore&amp;ref=https%3A%2F%2Fgroww.in%2Fstocks%2Fuser%2Fexplore&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Invest%20in%20Stocks%3A%20Explore%20LIVE%20NSE%2FBSE%20on%20Groww&amp;auid=1938776854.1691561325&amp;uaa=x86&amp;uab=64&amp;uafvl=Chromium%3B116.0.5845.96%7CNot)A%253BBrand%3B24.0.0.0%7CGoogle%2520Chrome%3B116.0.5845.96&amp;uamb=0&amp;uap=Windows&amp;uapv=15.0.0&amp;uaw=0&amp;rfmt=3&amp;fmt=4" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw="></script>
      <link as="script" rel="prefetch" href="76223-fbab34bce597d8a2.js">
      <link as="script" rel="prefetch" href="pages/user/watchlist/stocks-d52df917ffb0acde.js">
      <link as="script" rel="prefetch" href="48527-dbf6d8e401303220.js">
      <link as="script" rel="prefetch" href="58673-d8a40b616af6f80c.js">
      <link as="script" rel="prefetch" href="94551-dcf6836f35ca5623.js">
      <link as="script" rel="prefetch" href="5837-aff83651faeeef0f.js">
      <link as="script" rel="prefetch" href="68402-6b880549dc7cd9c3.js">
      <link as="script" rel="prefetch" href="15211-7255d5ad3fa49c8e.js">
      <link as="script" rel="prefetch" href="9654-c4719485cc2b99ea.js">
      <link as="script" rel="prefetch" href="89869-50ec1bc291c87672.js">
      <link as="script" rel="prefetch" href="47265-9fd0c107750096c2.js">
      <link as="script" rel="prefetch" href="pages/user/balance/inr-d48ca07e23c52dd1.js">
      <link as="script" rel="prefetch" href="2789-946bf83dae580baf.js">
      <link as="script" rel="prefetch" href="49675-69140fe40ca7b23b.js">
      <link as="script" rel="prefetch" href="35594-cb4ddaadde7ab070.js">
      <link as="script" rel="prefetch" href="95577-7619995caf05f82e.js">
      <link as="script" rel="prefetch" href="pages/user/cart-9bfb85a8243bdf3d.js">
      <link rel="stylesheet" type="text/css" href="6ec800fd871a5834.css">
      <link as="script" rel="prefetch" href="60609-e4ea24f2b5365100.js">
      <link as="script" rel="prefetch" href="89037-2a21416591797922.js">
      <link as="script" rel="prefetch" href="basic-details-4b5b5280c6b306c9.js">
      <link as="script" rel="prefetch" href="report-f0bc6efd32436322.js">
      <link as="script" rel="prefetch" href="change-password-4a9647f5eb8ecff7.js">
      <link as="script" rel="prefetch" href="change-pin-333d95449df48dec.js">
      <link as="script" rel="prefetch" href="trading-preference-6e50cc20f3368d3e.js">
      <link as="script" rel="prefetch" href="chart-preference-952db5ea3e726836.js">
      <link as="script" rel="prefetch" href="96099-4cb082aef27d224e.js">
      <link as="script" rel="prefetch" href="account-related-forms-a12f1d5cb07febe7.js">
      <link as="script" rel="prefetch" href="nominee-details-974c7a543585ad29.js">
      <link as="script" rel="prefetch" href="active-devices-d4470dfc13dd22af.js">
      <link rel="stylesheet" type="text/css" href="7907cfc0d135f06d.css">
      <style data-n-href="" nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=">.bd66Box{
    padding:30px 15px;
    width:100%
}
.bd66LeftInp{
    width:90%;
    float:left
}
.bd66RightInp{
    width:90%;
    float:right
}
.bd66BackImg{
    position:absolute;
    height:100%;
    width:auto;
    top:0;
    right:0
}
.bd66InpSt{
    letter-spacing:.8px
}
.pr12BigBox{
    margin-top:60px
}
.pr12LeftBox{
    position:relative;
    width:290px;
    padding:0 0 30px;
    float:left
}
.pr12ImgNameDiv{
    height:190px;
    flex-direction:column;
    justify-content:center
}
.pr12ImageCircle{
    width:100px;
    height:100px;
    box-shadow:0 0 10px var(--tempBoxShadow)
}
.pr12AccountCircle{
    padding-top:0;
    color:var(--gray700);
    font-size:100px!important;
    max-width:100px;
    max-height:100px
}
.pr12AuthName{
    margin-top:18px;
    height:20px
}
.pr12ProfMenu{
    padding:18px 16px;
    justify-content:space-between;
    color:var(--gray900)
}
.pr12ProfMenu:hover{
    color:var(--green500)!important;
    background:var(--green100)
}
.pr12ProfMenuSelected{
    color:var(--green500);
    background:var(--green100)
}
.pr12Icon{
    font-size:20px;
    color:var(--gray900);
    max-width:20px;
    max-height:20px
}
.pr12IconSelected,.pr12ProfMenu:hover .pr12Icon{
    color:var(--green500)!important
}
.pr12IcBox{
    max-height:19px;
    max-width:19px
}
.pr12RightBox{
    position:relative;
    width:calc(100% - 330px);
    float:right
}
.pr12Loader{
    width:100%;
    margin:200px auto 0
}
.pr12IconLoader{
    border-color:var(--gray900);
    border-right-color:var(--tempTransparent)
}
.pr12IconLoaderSelected,.pr12ProfMenu:hover .pr12IconLoader{
    border-color:var(--green500);
    border-right-color:var(--tempTransparent)
}
.pr12HighlightTab{
    height:14px;
    min-width:14px;
    border-radius:50%;
    opacity:.7;
    margin-left:auto;
    margin-right:10px
}
.pr12HighlightTabWarning{
    background:var(--yellow500)
}
.pr12HighlightTabError{
    background:var(--red500)
}
.c-zphJM {
    border-bottom: 2px solid var(--gray150);
    width: 100%;
    position: relative;
}
.c-UazGY {
    display: flex;
    align-items: center;
}
.c-iQSAhM-dCLcNh-disabled-true {
    border-bottom: none;
    pointer-events: none;
}
<style>
.c-iQSAhM {
    border: none;
    flex-grow: 1;
    outline: 0px;
    padding: 0px;
    color: var(--gray900);
    background: var(--tempBg);
    caret-color: var(--green500);
}
.c-lkBNdM {
    height: 100%;
}

</style> 
</head>
   <body>
      <div class="container-fluid" style="background-color: white;">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
         <div class="container" id="main">
            <a class="navbar-brand" href="#">
            <img src="logo.png" alt="Logo" style="width:100px;" class="rounded-pill" onclick="w3_open()">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link text-white" href="#">Position</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-white" href="#">Order</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-white" href="home.php">Portfolio</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Trade</a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Script Name</a></li>
                        <li><a class="dropdown-item" href="#">Buy Price</a></li>
                        <li><a class="dropdown-item" href="#">Sell Price</a></li>
                        <li><a class="dropdown-item" href="#">Profit / Loss</a></li>
                        <li><a class="dropdown-item" href="#">QTY</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <!--end::side bar-->
      <div class="row">
         <div class="col l12">
            <div class="col l12 dashboardTabDiv">
               <div class="container web-align">
                  <div class="pos-rel" style="height:54px">
                     <div class="valign-wrapper" style="height:60px">
                        <div class="dashboardTabsLine stocksSelected"></div>
                        <div style="padding-right:11px;" class="valign-wrapper dashboardTabsText">
                           <a href="home.php">
                              Portfolio
                        </div>
                        <div style="padding-right:11px;" class="valign-wrapper dashboardTabsText"><a href="watchlist.php">Watch List</a></div>
                        <div style="padding-right:11px;" class="valign-wrapper dashboardTabsText"><a href="funds_add.php">Funds</a></div>
                        <div class="valign-wrapper dashboardTabsText"><a href="profile.php">Profile</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="profilePage">
         <div class="row">
            <div class="col l12">
               <div class="container web-align">
                  <div class="col l12 pr12BigBox">
                     <div class="pr12LeftBox">
                        <div class="card borderPrimary contentPrimary">
                           <div class="valign-wrapper pr12ImgNameDiv">
                              <img class="pr12ImageCircle" src="" width="auto" height="auto" alt="">
                              <div class="pr12AuthName bodyMedium18"></div>
                           </div>
                        </div>
                        <div id="basicDetails12" class="bd66Parent onMount-appear-done onMount-enter-done">
                           <div class="card borderPrimary">
                              <div onsubmit="takevalue()">
                                 <div class="bd66Box clearfix">
                                    <div class="col l12 bd66InpContainer">
                                       <div class="col-md-12">
                                          <div class="bd66LeftInp">
											 <div>
                                                <div class="c-dDTklu bodyRegular14">NAME</div>
                                                <div class="c-zphJM">
                                                   <div class="c-UazGY">
                                                      <input class="c-iQSAhM c-iQSAhM-dCLcNh-disabled-true bodyRegular16" id="authorName" value="">
                                                   </div>
                                                </div>
                                                <div class="c-bEoCI c-bEoCI-cKbjjX-error-false bodyRegular14"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col l6 bd66RightInp">
                                          <div class="col-md-12">
											 <div>
                                                <div class="c-dDTklu bodyRegular14">Number</div>
                                                <div class="c-zphJM">
                                                   <div class="c-UazGY">
                                                      <input class="c-iQSAhM c-iQSAhM-dCLcNh-disabled-true bodyRegular16" id="Number" value="">
                                                   </div>
                                                </div>
                                                <div class="c-bEoCI c-bEoCI-cKbjjX-error-false bodyRegular14"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
									<div class="col l12 bd66InpContainer">
                                       <div class="col-md-12">
                                          <div class="bd66LeftInp">
											 <div>
                                                <div class="c-dDTklu bodyRegular14">Email</div>
                                                <div class="c-zphJM">
                                                   <div class="c-UazGY">
												   <input class="c-iQSAhM c-iQSAhM-dCLcNh-disabled-true bodyRegular16" id="Email" maxlength="10" value=""><span class="c-lkBNdM">   </span></div>
                                                </div>
                                                <div class="c-bEoCI c-bEoCI-cKbjjX-error-false bodyRegular14"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col l6 bd66RightInp">
                                          <div class="col-md-12">
											 <div>
                                                <div class="c-dDTklu bodyRegular14">Password</div>
                                                <div class="c-zphJM">
                                                   <div class="c-UazGY">
												   <input class="c-iQSAhM c-iQSAhM-dCLcNh-disabled-true bodyRegular16" id="Password" value=""><span class="c-lkBNdM">   </span></div>
                                                </div>
                                                <div class="c-bEoCI c-bEoCI-cKbjjX-error-false bodyRegular14"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
									<div class="col l12 bd66InpContainer">
                                       <div class="col-md-12">
                                          <div class="bd66LeftInp">
                                             <div>
                                                <div class="c-dDTklu bodyRegular14">Adhaar No.</div>
                                                <div class="c-zphJM">
                                                   <div class="c-UazGY">
                                                      <input class="c-iQSAhM c-iQSAhM-dCLcNh-disabled-true bodyRegular16" id="Adhaar" value="">
                                                   </div>
                                                </div>
                                                <div class="c-bEoCI c-bEoCI-cKbjjX-error-false bodyRegular14"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col l6 bd66RightInp">
                                          <div class="col-md-12">
                                             <div>
                                                <div class="c-dDTklu bodyRegular14">PAN</div>
                                                <div class="c-zphJM">
                                                   <div class="c-UazGY"><input class="c-iQSAhM c-iQSAhM-dCLcNh-disabled-true bodyRegular16" id="PAN" value=""><span class="c-lkBNdM">   </span></div>
                                                </div>
                                                <div class="c-bEoCI c-bEoCI-cKbjjX-error-false bodyRegular14"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col l12 bd66InpContainer">
                                       <div class="col-md-12">
                                          <div class="bd66LeftInp">
                                             <div>
                                                <div class="c-dDTklu bodyRegular14">Account No.</div>
                                                <div class="c-zphJM">
                                                   <div class="c-UazGY">
                                                      <input class="c-iQSAhM c-iQSAhM-dCLcNh-disabled-true bodyRegular16" id="a/cnumber" value="">
                                                   </div>
                                                </div>
                                                <div class="c-bEoCI c-bEoCI-cKbjjX-error-false bodyRegular14"></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col l6 bd66RightInp">
                                          <div class="col-md-12">
                                             <div>
                                                <div class="c-dDTklu bodyRegular14">IFSC Code</div>
                                                <div class="c-zphJM">
                                                   <div class="c-UazGY">
                                                      <input class="c-iQSAhM c-iQSAhM-dCLcNh-disabled-true bodyRegular16" id="ifsccode" value="">
                                                   </div>
                                                </div>
                                                <div class="c-bEoCI c-bEoCI-cKbjjX-error-false bodyRegular14"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row">
            <div class="col l12 backgroundTertiary contentPrimary">
               <div class="container web-align">
                  <div class="col l12 fm77ProductsLinks">
                     <div class="col l3">
                        <a href="/">
                           <div class="valign-wrapper pos-rel" itemscope="" itemtype="http://schema.org/Brand" style="min-width: 150px; min-height: 79px;">
                              <img class="" src="logo.png" width="150" height="50" alt="Groww Logo">
                           </div>
                        </a>
                        <p class="fm77Line1">Vaishnavi Tech Park, 3rd &amp; 4th Floor</p>
                        <p class="fm77Line2">Sarjapur Main Road, Bellandur</p>
                        <p class="fm77Line2">Bengaluru – 560103</p>
                        <div class="cur-po">
                           <p class="fm77Line2 fm77ContactUs"><u>Contact Us</u></p>
                        </div>
                        <div class="valign-wrapper fm77SocialMediaLinks">
                           <div class="fm77IconsMargin">
                              <a href="javascript:void(0)" class="col l12" target="_blank" rel="nofollow noopener noreferrer">
                                 <div class="lazyload-wrapper "><img class="" src="fb_icon.svg" width="40" height="30" alt="Groww FB Page" loading="lazy"></div>
                              </a>
                           </div>
                           <div class="fm77IconsMargin">
                              <a href="javascript:void(0)" class="col l12" target="_blank" rel="nofollow noopener noreferrer">
                                 <div class="lazyload-wrapper "><img class="" src="twitter_icon.svg" width="40" height="30" alt="Groww Twitter Page" loading="lazy"></div>
                              </a>
                           </div>
                           <div class="fm77IconsMargin">
                              <a href="javascript:void(0)" class="col l12" target="_blank" rel="nofollow noopener noreferrer">
                                 <div class="lazyload-wrapper "><img class="" src="yt_icon.svg" width="40" height="30" alt="Youtube Groww" loading="lazy"></div>
                              </a>
                           </div>
                           <div class="fm77IconsMargin">
                              <a href="javascript:void(0)" class="col l12" target="_blank" rel="nofollow noopener noreferrer">
                                 <div class="lazyload-wrapper "><img class="" src="instagram_icon.svg" width="40" height="30" alt="Groww Instagram Page" loading="lazy"></div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col l9">
                        <div class="col l4 fm77GrowwTxt">
                           <div class="col l12 fm77FooterHeading bodyRegular18" style="float: initial;">PRODUCTS</div>
                           <a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/stocks/filter">Stocks</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/futures-and-options/user/explore">Futures &amp; Options</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/mutual-funds/filter">Mutual Funds</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/us-stocks/filter">US Stocks</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/loans/personal-loan">Credit</a>
                        </div>
                        <div class="col l4 fm77GrowwTxt">
                           <div class="col l12 fm77FooterHeading bodyRegular18" style="float: initial;">GROW Capital One</div>
                           <a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/about-us">About Us</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/pricing">Pricing</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/blog">Blog</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/press">Media &amp; Press</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/careers">Careers</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/help">Help and Support</a>
                        </div>
                        <div class="col l4 fm77GrowwTxt">
                           <div class="col l12 fm77FooterHeading bodyRegular18" style="float: initial;">QUICK LINKS</div>
                           <a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/mutual-funds/amc">AMC Mutual Funds</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/calculators">Calculators</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/p">Glossary</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/open-demat-account">Open Demat Account</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/digest">Grow Capital One Digest</a><a class="col l12 fm77FooterLink contentPrimary" target="_self" href="/sitemap">Sitemap</a>
                        </div>
                     </div>
                  </div>
                  <div class="col l12 fm77FooterLine borderNeutral"></div>
                  <div class="col l12 fm77CopyRightDiv">
                     <div class="col l6 valign-wrapper">ⓒ&nbsp;2016-2023 Grow Capital One. All rights reserved, Built with <span class="fm77HeartImg">♥</span>in India</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script id="__NEXT_DATA__" type="application/json" nonce="Q8Du3PPJ/Ovz+SU4JkEAefYTL0rI/lNbw5xSlw1+nS4=">{"props":{"pageProps":{}},"page":"/stocks/user/explore","query":{},"buildId":"fQReYOoOymIMY93TRT97k","assetPrefix":"//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod","nextExport":true,"autoExport":true,"isFallback":false,"scriptLoader":[{"nonce":"Q8Du3PPJ/Ovz+SU4JkEAefYTL0rI/lNbw5xSlw1+nS4=","strategy":"afterInteractive","id":"_webengage_script_tag","dangerouslySetInnerHTML":{"__html":" var webengage;!function(w,e,b,n,g){function o(e,t){e[t[t.length-1]]=function(){r.__queue.push([t.join(\".\"),\n          arguments])}}var i,s,r=w[b],z=\" \",l=\"init options track screen onReady\".split(z),a=\"feedback survey notification\".split(z),c=\"options render clear abort\".split(z),p=\"Open Close Submit Complete View Click\".split(z),u=\"identify login logout setAttribute\".split(z);if(!r||!r.__v){for(w[b]=r={__queue:[],__v:\"6.0\",user:{}},i=0;i \u003c l.length;i++)o(r,[l[i]]);for(i=0;i \u003c a.length;i++){for(r[a[i]]={},s=0;s \u003c c.length;s++)o(r[a[i]],[a[i],c[s]]);for(s=0;s \u003c p.length;s++)o(r[a[i]],[a[i],\"on\"+p[s]])}for(i=0;i \u003c u.length;i++)o(r.user,[\"user\",u[i]]);setTimeout(function(){var f=e.createElement(\"script\"),d=e.getElementById(\"_webengage_script_tag\");f.type=\"text/javascript\",f.async=!0,f.src=(\"https:\"==e.location.protocol?\"https://widgets.in.webengage.com\":\"http://widgets.in.webengage.com\")+\"/js/webengage-min-v-6.0.js\",d.parentNode.insertBefore(f,d)})}}(window,document,\"webengage\");\n          window.webengage.init(\"in~76aa392\");\n          "}},{"nonce":"Q8Du3PPJ/Ovz+SU4JkEAefYTL0rI/lNbw5xSlw1+nS4=","strategy":"afterInteractive","dangerouslySetInnerHTML":{"__html":"(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'\u0026l='+l:'';j.async=!0;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f)})(window,document,'script','dataLayer','GTM-T7VTWPR')"}}]}</script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7f5f3eca98313ae6","token":"325a8077a90445fd9fb4d15b919a1e89","version":"2023.7.0","si":100}' crossorigin="anonymous"></script>
      <script>
         function w3_open() {
           document.getElementById("main").style.marginLeft = "25%";
           document.getElementById("mySidebar").style.width = "40%";
           document.getElementById("mySidebar").style.display = "block";
           document.getElementById("openNav").style.display = 'none';
         }
         function w3_close() {
           document.getElementById("main").style.marginLeft = "0%";
           document.getElementById("mySidebar").style.display = "none";
           document.getElementById("openNav").style.display = "inline-block";
         }
      </script>
      <script defer="" src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon="{&quot;rayId&quot;:&quot;7f9f34cb98bb3a41&quot;,&quot;token&quot;:&quot;325a8077a90445fd9fb4d15b919a1e89&quot;,&quot;version&quot;:&quot;2023.8.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>
      <script type="text/javascript" async="" src="https://widgets.in.webengage.com/js/webengage-min-v-6.0.js"></script><script nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" id="_webengage_script_tag" data-nscript="afterInteractive"> var webengage;!function(w,e,b,n,g){function o(e,t){e[t[t.length-1]]=function(){r.__queue.push([t.join("."),
         arguments])}}var i,s,r=w[b],z=" ",l="init options track screen onReady".split(z),a="feedback survey notification".split(z),c="options render clear abort".split(z),p="Open Close Submit Complete View Click".split(z),u="identify login logout setAttribute".split(z);if(!r||!r.__v){for(w[b]=r={__queue:[],__v:"6.0",user:{}},i=0;i < l.length;i++)o(r,[l[i]]);for(i=0;i < a.length;i++){for(r[a[i]]={},s=0;s < c.length;s++)o(r[a[i]],[a[i],c[s]]);for(s=0;s < p.length;s++)o(r[a[i]],[a[i],"on"+p[s]])}for(i=0;i < u.length;i++)o(r.user,["user",u[i]]);setTimeout(function(){var f=e.createElement("script"),d=e.getElementById("_webengage_script_tag");f.type="text/javascript",f.async=!0,f.src=("https:"==e.location.protocol?"https://widgets.in.webengage.com":"http://widgets.in.webengage.com")+"/js/webengage-min-v-6.0.js",d.parentNode.insertBefore(f,d)})}}(window,document,"webengage");
         window.webengage.init("in~76aa392");
      </script><script nonce="EBMJ4ZUwLzPT2RHIgMV4aTfzIUJSwL8cjby8DqiKzCw=" data-nscript="afterInteractive">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=!0;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f)})(window,document,'script','dataLayer','GTM-T7VTWPR')</script>
      <next-route-announcer>
         <p aria-live="assertive" id="__next-route-announcer__" role="alert" style="border: 0px; clip: rect(0px, 0px, 0px, 0px); height: 1px; margin: -1px; overflow: hidden; padding: 0px; position: absolute; width: 1px; white-space: nowrap; overflow-wrap: normal;">User Profile</p>
      </next-route-announcer>
      <script type="application/javascript" async="" defer="" src="https://resources.groww.in/web-assets/rc-p.js?v=55875018"></script>
      <webengagedata>
         <style type="text/css">#webklipper-publisher-widget-container, #webklipper-publisher-widget-container * {overflow:visible; -webkit-box-sizing: content-box; -moz-box-sizing: content-box;  box-sizing: content-box; margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit; vertical-align: baseline;}</style>
         <div id="webklipper-publisher-widget-container">
            <iframe title="webengage-engagement-callback-frame" name="webengage-engagement-callback-frame" id="webengage-engagement-callback-frame" frameborder="0" marginheight="0" marginwidth="0" style="position: absolute; background-color: transparent; bottom: 0px; right: 0px; border: none; overflow: hidden; visibility: hidden; display: none;"></iframe><iframe title="_we_wk_data_store" name="_we_wk_data_store" id="_we_wk_data_store" frameborder="0" marginheight="0" marginwidth="0" src="https://inz76aa392.in.webengage.co/storage-frame-1.13.htm?cdn=y&amp;cbf=webengage-engagement-callback-frame&amp;lc=in~76aa392" style="position: absolute; background-color: transparent; bottom: 0px; right: 0px; border: none; overflow: hidden; visibility: hidden; display: none;"></iframe><script type="text/javascript" charset="UTF-8" async="" src="https://c.in.webengage.com/upf.js?licenseCode=in~76aa392&amp;luid=b36b7d31e05cd20f44d98cd511ae50f658726844&amp;cuid=d69f6526-fe01-433b-9e41-18b9739ca120&amp;lp=https%3A%2F%2Fgroww.in%2Fstocks%2Fuser%2Fexplore&amp;rf=https%3A%2F%2Fgroww.in%2Fstocks%2Fuser%2Fexplore&amp;geo=y&amp;jsonp=_we_jsonp_global_cb_1692589848601"></script>
         </div>
      </webengagedata>
      <script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","941915096655815");fbq("track","AbsolutePageView");fbq("track","PageView");</script>
      <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=941915096655815&amp;ev=PageView&amp;noscript=1"></noscript>
      <script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/63429-c8f10aa70810a479.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/21632-c85e3d5acd73040d.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/59089-1cd5edab052e6900.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/71597-f9adee65e0f2ce95.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/stocks/%5Bcompany-search-id%5D-d55044a7dc9084d6.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/9373-c9332d0c4b4c1286.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/49065-ba0566dacca6bf6b.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/8722-216743aa3374dcf5.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/35679-bf1769f1955ce9c7.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/18647-bf0230c844354cf3.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/stocks/user/investments-a49c9ce84bdeabab.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/64740-1bfd751362212dd8.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/futures-and-options/user/explore-b099e8498bb8e899.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/81396-35604332c8309891.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/indices-35bd3ce783c6fadc.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/stocks/intraday-f5cb4094a083706c.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/11074-2eb39b9dcac1c42f.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/ipo-fdd0431d9c652f52.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/67241-9ecf7d4e9087e0ec.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/92930-7415520be6596380.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/stocks/filter-bff0155adf8ef4b8.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/99353-b8999a8670ad3e38.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/26857-ad86fde7e640c3a7.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/markets/top-gainers-b0552421c1d74244.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/markets/top-losers-d964510b0ca1fafb.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/48527-dbf6d8e401303220.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/58673-d8a40b616af6f80c.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/94551-dcf6836f35ca5623.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/5837-aff83651faeeef0f.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/68402-6b880549dc7cd9c3.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/15211-7255d5ad3fa49c8e.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/9654-c4719485cc2b99ea.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/89869-50ec1bc291c87672.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/47265-9fd0c107750096c2.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/user/balance/inr-d48ca07e23c52dd1.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/2789-946bf83dae580baf.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/49675-69140fe40ca7b23b.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/35594-cb4ddaadde7ab070.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/95577-7619995caf05f82e.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/user/cart-9bfb85a8243bdf3d.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/76223-fbab34bce597d8a2.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/user/watchlist/stocks-d52df917ffb0acde.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/60609-e4ea24f2b5365100.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/89037-2a21416591797922.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/user/profile/basic-details-4b5b5280c6b306c9.js"></script>
      <script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","941915096655815");fbq("track","AbsolutePageView");fbq("track","PageView");</script>
      <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=941915096655815&amp;ev=PageView&amp;noscript=1"></noscript>
      <script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/user/profile/change-password-4a9647f5eb8ecff7.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/user/profile/change-pin-333d95449df48dec.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/user/profile/trading-preference-6e50cc20f3368d3e.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/user/profile/chart-preference-952db5ea3e726836.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/96099-4cb082aef27d224e.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/user/profile/nominee-details-974c7a543585ad29.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/user/profile/active-devices-d4470dfc13dd22af.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/user/profile/account-related-forms-a12f1d5cb07febe7.js"></script><script src="//assets-netstorage.groww.in/web-assets/billion_groww_desktop/prod/_next/static/chunks/pages/user/profile/report-f0bc6efd32436322.js"></script>
   </body>
</html>