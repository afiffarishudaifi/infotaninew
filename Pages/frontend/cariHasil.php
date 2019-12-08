<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
      LIMAS - Library Management System
  </title>

    <!-- XAVIER Supports -->
    <script type="text/javascript">

    </script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-select.min.css" />
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="./js/database.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap-select.min.js"></script>
    <!--manual CSS-->
    <link rel="stylesheet" type="text/css" href="./css/cariHasil.css" />
    <!-- Check session -->
    <script type="text/javascript">

    </script>
</head>
<body>




<div id="flipkart-navbar" class="navbar-fixed-top">
    <div class="container">
        <div class="row row1">
            <ul class="largenav pull-right">


            </ul>
        </div>
        <div class="row row2">
            <div class="col-sm-2">
                <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">INFOTANI</span></h2>
                <h1 style="margin:0px;"><span class="largenav" style="font-size:25px;">INFOTANI</span></h1>
            </div>
            <div class="flipkart-navbar-search smallsearch col-sm-8 col-xs-11">
                <div class="row">

                  <form role="search" action="" method="GET" id="XXX">
                    <input class="flipkart-navbar-input col-xs-11 cari" type="text" placeholder="Cari Data..." value="">
                    <button class="flipkart-navbar-button col-xs-1" id="btnsearch" onclick="">
                        <svg width="15px" height="15px">
                            <path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868
                            11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0
                            2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895
                            6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
                        </svg>
                    </button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid content">
    <div class="col-lg-12">
        <div class="col-lg-11 col-lg-offset-1">
           
<div id="datatable" style="margin-top: 130px;"></div>
            <div>
                <nav aria-label="Page navigation" style="margin: -12px 10px 0 10px;">
                    <ul class="pager">
                        <li class="previous" id="previous">
                            <a id="aprevious" onclick="PopulateTable('','previous');">
                                <span aria-hidden="true">&larr;</span>
                                Previous
                            </a>
                        </li>
                        <li><label style="margin:6px" id="page">PAGE<label></li>
                        <li class="next" id="next">
                            <a id="anext" onclick="PopulateTable('','next');">
                                Next
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
    </div>
</div>

<!--Modal view-->
<!--
<div id="ModalView" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ModalResult" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">

            <h4 class="modal-title" id="ModalResult">Detail Buku {judul}        </div>
        <div class="modal-body">
            <div class="form-horizontal">
                <table class="table">
                    <thead>
                                            <tbody id="datatablee"></tbody>
                </table>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                        Kembali                         </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>-->

<script type="text/javascript">
PopulateTable();
PopulateTable('buku');$(".cari").keyup(function(e){
  if (e.which == 13) {
    PopulateTable($(".cari").val());
  }
});
$("#btnsearch").click(function(e){PopulateTable($(".cari").val());
});
$("#XXX").submit(function(e){e.preventDefault();});
var currentpage = 0;
var totalpages = 0;


function PopulateTable(id, mode, pagez) {
  if (!pagez) {
      pagez = 0;
  }
  if (!id) {
      id = "";
  }
  if (mode) {
      if (mode == "next") {
          if (currentpage != totalpages - 1) {
              pagez = currentpage += 1;
          } else {
              return;
          }
      } else if (mode == "previous") {
          if (currentpage != 0) {
              pagez = currentpage -= 1;
          } else {
              return;
          }
      }
  }
    var key = "";
    var query = {"action" : "populatetable_result", "search" : id, "key" : key, "page" : pagez};
        XAVIER({"processor" : "./processor/result", "data" : query}, function(data) {
            var items = [];
            if (data === "noresult") {
                items.push("<font style='margin-top: 20px;'>Data Tidak Tersedia</font>");
            } else {
                if(data) {
                    var butcher = JSON.parse(data);
                    var pages   = butcher["pages"];
                    var xjson = $.parseJSON(butcher["data"]);
                }
                $.each(xjson, function(index, value) {
                    /* var line = '';
                    if (index != 0) {
                        line = "style='border-bottom:1px solid black;'";
                    }
                    items.push("<tr "+line+"><td>&nbsp</td></tr><tr>" +
                    "<td style='font-size: 22px; color: #000099' colspan='3'>" +
                     value[0] + "</td></tr>");
                    items.push("<tr><td width='200px' valign='top' rowspan='4'><a href='resources/upload/buku/"+value[4]+"' target='_blank'><img width='150' src='resources/upload/buku/" +  value[4] +"' onerror=\"this.onerror=null;this.src='resources/upload/buku/404.jpg';\"></a></td><td width='50px'><b>Tersedia</b></td> <td>" +  value[1] +"</td></tr>");
                    items.push("<tr><td width='50px'><b>Jenis</b></td> <td>" +  value[2] +"</td></tr>");
		    items.push("<tr><td width='90px'><b> CD Buku </b></td> <td>" +  value[5] +"</td></tr>");
                    items.push("<tr height='200'><td valign='top' width='90px'><b> Deskripsi </b></td> <td valign='top' style='text-align:justify;'>" + value[3] +"</td></tr>");
*/
		    items.push('<div class="row">');	

		    items.push('<div class="col-md-12">');
		    items.push('<h3>'+value[0]+'</h3>');
		    items.push('</div>');

		    items.push('</div>');
		    
		    items.push('<div class="row">');
		    
		    items.push('<div class="col-md-3">');
			items.push("<a href='resources/upload/buku/"+value[4]+"' target='_blank'><img width='100%' src='resources/upload/buku/" +  value[4] +"' onerror=\"this.onerror=null;this.src='resources/upload/buku/404.jpg';\"></a>");
		    items.push('</div>');
		    
		    items.push('<div class="col-md-9">');
			items.push('<dl class="dl-horizontal">');

			items.push('<dt>Tersedia</dt>');
			items.push('<dd><span class="hidden-xs">: </span>'+value[1]+'</dd>');

			items.push('<dt>Jenis</dt>');
			items.push('<dd><span class="hidden-xs">: </span>'+value[2]+'</dd>');
			items.push('<dt>CD Buku</dt>');
			items.push('<dd><span class="hidden-xs">: </span>'+value[5]+'</dd>');
			items.push('<dt>Deskripsi</dt>');
			items.push('<dd><span class="hidden-xs">: </span>'+value[3]+'</dd>');

			items.push('</dl>')
		    items.push('</div>');
		    
		    items.push('</div><hr />');
                });
                totalpages = pages;
                if (pages == 1) {
                    $("#previous").attr("class", "previous disabled");
                    $("#next").attr("class", "next disabled");
                } else if (currentpage == 0) {
                    $("#next").attr("class", "next");
                    $("#previous").attr("class", "previous disabled");
                } else if (currentpage == pages - 1) {
                    $("#previous").attr("class", "previous");
                    $("#next").attr("class", "next disabled");
                } else {
                    $("#previous").attr("class", "previous");
                    $("#next").attr("class", "next");
                }
            }
            var output = items.join("");
            $("#datatable").html(output);
	    
            $("html, body").animate({ scrollTop: 0 }, "fast");
            var xaxa = currentpage + 1;
            if (pages !== 0) {
                $("#page").html("Halaman " + xaxa + " dari " + pages + " halaman");
            } else {
                $("#page").html("Tidak ada hasil");
                currentpage = 0;
                $("#previous").attr("class", "previous disabled");
                $("#next").attr("class", "next disabled");
            }
        });
    }
function set(puzzle) {
    totalpages = puzzle;
    return puzzle;
}
/*

//fungsi modal
function view(id) {
    if (id) {
      $('#ModalView').modal({
          backdrop: 'static',
          keyboard: false
      });
      str = "Detail Buku {judul}";
      str = str.replace(/\{(.*?)\}/g, name);
      $("#ModalResult").text(str);
    }
    var key = "";
    var query = {"action" : "populatetable_result2", "search" : id, "key" : key};
    XAVIER({"processor" : "./processor/result", "data" : query}, function(data, status) {
      var items = [];
      if (data) {
        var xjson = $.parseJSON(data);
      }
       $.each($.parseJSON(data), function(index, value) {
            items.push("<tr><td>" + value[0] + "</td></tr>");//Deskripsi
       //     items.push("<td> <a href='#view' onclick=view('" + value.id + "')>view</a></td>");
   });
   var output = items.join("");
   $("#datatablee").html(output);
   console.log(data);
 })
}
*/




</script>

</body>
</html>
