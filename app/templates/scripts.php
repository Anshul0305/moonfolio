<!--   Core JS Files   -->
<script src="./assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/material.min.js" type="text/javascript"></script>


<!--  Charts Plugin -->
<script src="./assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="./assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="./assets/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="./assets/js/demo.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
    $(document).ready(function() {
        $('#coins').DataTable();
    } );
    $(document).ready(function() {
        $('#monthly').DataTable();
    } );
</script>
<script>
    /*

     Polymer Example: https://polymer-tut.appspot.com/
     Kerem Sevencan @keremciu
     https://twitter.com/keremciu
     https://dribbble.com/keremciu
     ----------------
     Hey Everyone,

     I love material design and I developed the following polymer app without canvas and polymer.

     I've used Only CSS3 - Pure Javascript! I hope you like it :)

     */
    window.onload = function() {
        var heart = document.getElementsByClassName("heart");
        var classname = document.getElementsByClassName("tabitem");
        var boxitem = document.getElementsByClassName("box");

        var clickFunction = function(e) {
            e.preventDefault();
            var a = this.getElementsByTagName("a")[0];
            var span = this.getElementsByTagName("span")[0];
            var href = a.getAttribute("href").replace("#","");
            for(var i=0;i<boxitem.length;i++){
                boxitem[i].className =  boxitem[i].className.replace(/(?:^|\s)show(?!\S)/g, '');
            }
            document.getElementById(href).className += " show";
            for(var i=0;i<classname.length;i++){
                classname[i].className =  classname[i].className.replace(/(?:^|\s)active(?!\S)/g, '');
            }
            this.className += " active";
            span.className += 'active';
            var left = a.getBoundingClientRect().left;
            var top = a.getBoundingClientRect().top;
            var consx = (e.clientX - left);
            var consy = (e.clientY - top);
            span.style.top = consy+"px";
            span.style.left = consx+"px";
            span.className = 'clicked';
            span.addEventListener('webkitAnimationEnd', function(event){
                this.className = '';
            }, false);
        };

        for(var i=0;i<classname.length;i++){
            classname[i].addEventListener('click', clickFunction, false);
        }
        for(var i=0;i<heart.length;i++){
            heart[i].addEventListener('click', function(e) {
                var classString = this.className, nameIndex = classString.indexOf("active");
                if (nameIndex == -1) {
                    classString += ' ' + "active";
                }
                else {
                    classString = classString.substr(0, nameIndex) + classString.substr(nameIndex+"active".length);
                }
                this.className = classString;

            }, false);
        }
    }
</script>