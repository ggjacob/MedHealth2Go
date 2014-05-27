<!-- Page Footer -->
<footer id="footer" role="contentinfo">
    <div class="wrapper wrapper-transparent">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span6 small-screen-center">
                    <p>Powered by
                        <img alt="MedHealth2Go Logo" src="<?php echo base_url(); ?>assets/images/footer.png">
                        <br>
                        © Copyright MedHealth2Go 2013
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo base_url(); ?>assets/javascripts/bootstrap.js" type="text/javascript"></script>
<script src='<?php echo base_url(); ?>assets/javascripts/jquery.flexslider-min.js' type='text/javascript'></script>
<script src='<?php echo base_url(); ?>assets/javascripts/jquery.fancybox.pack.js' type='text/javascript'></script>
<script src='<?php echo base_url(); ?>assets/javascripts/jquery.fancybox-media.js' type='text/javascript'></script>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            language: 'en'
        });
    });
</script>

<script src="<?php echo base_url();?>assets/javascripts/bootstrap-datetimepicker.js" type="text/javascript"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
</script>
<div style="left: 0px; z-index: 1060;" class="datetimepicker datetimepicker-dropdown-bottom-right dropdown-menu"><div style="display: none;" class="datetimepicker-minutes"><table class=" table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">19 April 2014</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><fieldset class="minute"><legend>PM</legend><span class="minute active">12:00</span><span class="minute">12:05</span><span class="minute">12:10</span><span class="minute">12:15</span><span class="minute">12:20</span><span class="minute">12:25</span><span class="minute">12:30</span><span class="minute">12:35</span><span class="minute">12:40</span><span class="minute">12:45</span><span class="minute">12:50</span><span class="minute">12:55</span></fieldset></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr></tfoot></table></div><div style="display: none;" class="datetimepicker-hours"><table class=" table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">19 April 2014</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><fieldset class="hour"><legend>AM</legend><span class="hour hour_am">12</span><span class="hour hour_am">1</span><span class="hour hour_am">2</span><span class="hour hour_am">3</span><span class="hour hour_am">4</span><span class="hour hour_am">5</span><span class="hour hour_am">6</span><span class="hour hour_am">7</span><span class="hour hour_am">8</span><span class="hour hour_am">9</span><span class="hour hour_am">10</span><span class="hour hour_am">11</span></fieldset><fieldset class="hour"><legend>PM</legend><span class="hour active hour_pm">12</span><span class="hour hour_pm">1</span><span class="hour hour_pm">2</span><span class="hour hour_pm">3</span><span class="hour hour_pm">4</span><span class="hour hour_pm">5</span><span class="hour hour_pm">6</span><span class="hour hour_pm">7</span><span class="hour hour_pm">8</span><span class="hour hour_pm">9</span><span class="hour hour_pm">10</span><span class="hour hour_pm">11</span></fieldset></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr></tfoot></table></div><div style="display: block;" class="datetimepicker-days"><table class=" table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">April 2014</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr><tr><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th><th class="dow">Su</th></tr></thead><tbody><tr><td class="day old">31</td><td class="day">1</td><td class="day">2</td><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day">6</td></tr><tr><td class="day">7</td><td class="day">8</td><td class="day">9</td><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td></tr><tr><td class="day">14</td><td class="day">15</td><td class="day">16</td><td class="day">17</td><td class="day">18</td><td class="day today active">19</td><td class="day">20</td></tr><tr><td class="day">21</td><td class="day">22</td><td class="day">23</td><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td></tr><tr><td class="day">28</td><td class="day">29</td><td class="day">30</td><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td></tr><tr><td class="day new">5</td><td class="day new">6</td><td class="day new">7</td><td class="day new">8</td><td class="day new">9</td><td class="day new">10</td><td class="day new">11</td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr></tfoot></table></div><div style="display: none;" class="datetimepicker-months"><table class="table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">2014</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan</span><span class="month">Feb</span><span class="month">Mar</span><span class="month active">Apr</span><span class="month">May</span><span class="month">Jun</span><span class="month">Jul</span><span class="month">Aug</span><span class="month">Sep</span><span class="month">Oct</span><span class="month">Nov</span><span class="month">Dec</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr></tfoot></table></div><div style="display: none;" class="datetimepicker-years"><table class="table-condensed"><thead><tr><th style="visibility: visible;" class="prev"><i class="icon-arrow-left"></i></th><th colspan="5" class="switch">2010-2019</th><th style="visibility: visible;" class="next"><i class="icon-arrow-right"></i></th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year active">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year">2019</span><span class="year old">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">Today</th></tr></tfoot></table></div></div>
</body>
</html>