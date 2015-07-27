 
<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css" />

<!--[if IE 7]>
  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
<![endif]-->

<!--page specific plugin styles-->

<!--fonts-->


<!--ace styles-->

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.gritter.css" />
<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/fullcalendar.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/mine.css" />

<div class="main-content">
    <style>
        .form-horizontal .controls {
            margin-left: 2px;
        }
    </style>

    <div class="page-content">
        <div class="widget-box transparent" id="recent-box">


            <div class="row-fluid">
                <div class="span9">
                    <div class="space"></div>

                    <div id="calendar"></div>
                </div>

                <div class="span3">
                    <div class="widget-box transparent">
                        <div class="widget-header">
                            <h4>Your programmes</h4>
                        </div>

                        <div class="row-fluid">
                            <div class="span7 infobox-container">
                                <div class="infobox infobox-green  ">
                                    <div class="infobox-icon">
                                        <i class="icon-comments"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">32</span>
                                        <div class="infobox-content">comments + 2 reviews</div>
                                    </div>
                                    <div class="stat stat-success">8%</div>
                                </div>

                                <div class="infobox infobox-blue  ">
                                    <div class="infobox-icon">
                                        <i class="icon-twitter"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">11</span>
                                        <div class="infobox-content">new followers</div>
                                    </div>

                                    <div class="badge badge-success">
                                        +32%
                                        <i class="icon-arrow-up"></i>
                                    </div>
                                </div>

                                <div class="infobox infobox-pink  ">
                                    <div class="infobox-icon">
                                        <i class="icon-shopping-cart"></i>
                                    </div>

                                    <div class="infobox-data">
                                        <span class="infobox-data-number">8</span>
                                        <div class="infobox-content">new orders</div>
                                    </div>
                                    <div class="stat stat-important">+4%</div>
                                </div>






                                <div class="space-6"></div>


                            </div>

                            <div class="vspace"></div>

                        </div><!--/row-->
                    </div>
                </div>

                <div class="span3">
                    <div class="widget-box ">
                        <div class="widget-header">
                            <h4 class="lighter smaller">
                                <i class="icon-comment blue"></i>
                                Your messages
                            </h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <div class="dialogs">
                                    <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <img alt="Alexa's Avatar" src="<?php echo base_url(); ?>uploads/shamim.jpg" />
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="green">4 sec</span>
                                            </div>

                                            <div class="name">
                                                <a href="#">Shamim</a>
                                            </div>
                                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-minier btn-info">
                                                    <i class="icon-only icon-share-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="itemdiv dialogdiv">
                                        <div class="user">
                                            <img alt="John's Avatar" src="<?php echo base_url(); ?>uploads/DSC_6320.JPG" />
                                        </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="blue">38 sec</span>
                                            </div>

                                            <div class="name">
                                                <a href="#">Richard</a>
                                            </div>
                                            <div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-minier btn-info">
                                                    <i class="icon-only icon-share-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <form />
                                <div class="form-actions input-append">
                                    <input placeholder="Type your message here ..." type="text" class="width-75" name="message" />
                                    <button class="btn btn-small btn-info no-radius" onclick="return false;">
                                        <i class="icon-share-alt"></i>
                                        <span class="hidden-phone">Send</span>
                                    </button>
                                </div>
                                </form>
                            </div><!--/widget-main-->
                        </div><!--/widget-body-->
                    </div><!--/widget-box-->
                </div><!--/span-->
            </div>       
        </div><!--/widget-box-->

    </div>


</div>


</div><!--/.main-content-->
<script src="<?= base_url(); ?>assets/js/2.0.3-jquery.min.js"></script>


<script src="<?= base_url(); ?>assets/js/fullcalendar.min.js"></script>
<script type="text/javascript">
                                        $(function () {

                                            /* initialize the external events
                                             -----------------------------------------------------------------*/

                                            $('#external-events div.external-event').each(function () {

                                                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                                                // it doesn't need to have a start or end
                                                var eventObject = {
                                                    title: $.trim($(this).text()) // use the element's text as the event title
                                                };

                                                // store the Event Object in the DOM element so we can get to it later
                                                $(this).data('eventObject', eventObject);

                                                // make the event draggable using jQuery UI
                                                $(this).draggable({
                                                    zIndex: 999,
                                                    revert: true, // will cause the event to go back to its
                                                    revertDuration: 0  //  original position after the drag
                                                });

                                            });




                                            /* initialize the calendar
                                             -----------------------------------------------------------------*/

                                            var date = new Date();
                                            var d = date.getDate();
                                            var m = date.getMonth();
                                            var y = date.getFullYear();


                                            var calendar = $('#calendar').fullCalendar({
                                                buttonText: {
                                                    prev: '<i class="icon-chevron-left"></i>',
                                                    next: '<i class="icon-chevron-right"></i>'
                                                },
                                                header: {
                                                    left: 'prev,next today',
                                                    center: 'title',
                                                    right: 'month,agendaWeek,agendaDay'
                                                },
                                                events: [
<?php
if (is_array($events) && count($events)) {
    foreach ($events as $loop) {
        $values = explode("-", $loop->startdate);
        $ys = $values[0];
        $ms = $values[1];
        $ds = $values[2];
        $valued = explode("-", $loop->enddate);
        $yd = $valued[0];
        $md = $valued[1];
        $dd = $valued[2];
        ?>
                                                            {
                                                                title: '<?php echo $loop->title ?>',
                                                                start: new Date(<?= $ys ?>, <?= $ms - 1 ?>,<?= $ds ?>),
                                                                end: new Date(<?= $yd ?>, <?= $md - 1 ?>,<?= $dd ?>),
                                                                className: 'label-important'
                                                            },
        <?php
    }
}
?>]
                                                ,
                                                editable: true,
                                                droppable: true, // this allows things to be dropped onto the calendar !!!
                                                drop: function (date, allDay) { // this function is called when something is dropped

                                                    // retrieve the dropped element's stored Event Object
                                                    var originalEventObject = $(this).data('eventObject');
                                                    var $extraEventClass = $(this).attr('data-class');


                                                    // we need to copy it, so that multiple events don't have a reference to the same object
                                                    var copiedEventObject = $.extend({}, originalEventObject);

                                                    // assign it the date that was reported
                                                    copiedEventObject.start = date;
                                                    copiedEventObject.allDay = allDay;
                                                    if ($extraEventClass)
                                                        copiedEventObject['className'] = [$extraEventClass];

                                                    // render the event on the calendar
                                                    // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                                                    $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                                                    // is the "remove after drop" checkbox checked?
                                                    if ($('#drop-remove').is(':checked')) {
                                                        // if so, remove the element from the "Draggable Events" list
                                                        $(this).remove();
                                                    }

                                                }
                                                ,
                                                selectable: true,
                                                selectHelper: true,
                                                select: function (start, end, allDay) {

                                                    bootbox.prompt("New Event Title:", function (title) {
                                                        if (title !== null) {
                                                            calendar.fullCalendar('renderEvent',
                                                                    {
                                                                        title: title,
                                                                        start: start,
                                                                        end: end,
                                                                        allDay: allDay
                                                                    },
                                                            true // make the event "stick"
                                                                    );
                                                        }
                                                    });


                                                    calendar.fullCalendar('unselect');

                                                }
                                                ,
                                                eventClick: function (calEvent, jsEvent, view) {

                                                    var form = $("<form class='form-inline'><label>Change event name &nbsp;</label></form>");
                                                    form.append("<input autocomplete=off type=text value='" + calEvent.title + "' /> ");
                                                    form.append("<button type='submit' class='btn btn-small btn-success'><i class='icon-ok'></i> Save</button>");

                                                    var div = bootbox.dialog(form,
                                                            [
                                                                {
                                                                    "label": "<i class='icon-trash'></i> Delete Event",
                                                                    "class": "btn-small btn-danger",
                                                                    "callback": function () {
                                                                        calendar.fullCalendar('removeEvents', function (ev) {
                                                                            return (ev._id == calEvent._id);
                                                                        })
                                                                    }
                                                                }
                                                                ,
                                                                {
                                                                    "label": "<i class='icon-remove'></i> Close",
                                                                    "class": "btn-small"
                                                                }
                                                            ]
                                                            ,
                                                            {
                                                                // prompts need a few extra options
                                                                "onEscape": function () {
                                                                    div.modal("hide");
                                                                }
                                                            }
                                                    );

                                                    form.on('submit', function () {
                                                        calEvent.title = form.find("input[type=text]").val();
                                                        calendar.fullCalendar('updateEvent', calEvent);
                                                        div.modal("hide");
                                                        return false;
                                                    });


                                                    //console.log(calEvent.id);
                                                    //console.log(jsEvent);
                                                    //console.log(view);

                                                    // change the border color just for fun
                                                    //$(this).css('border-color', 'red');

                                                }

                                            });


                                        })
</script>
<script src="<?= base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?= base_url(); ?>assets/js/select2.min.js"></script>
<script src="<?= base_url(); ?>assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/js/fuelux/fuelux.spinner.min.js"></script>
<script src="<?= base_url(); ?>assets/js/x-editable/bootstrap-editable.min.js"></script>
<script src="<?= base_url(); ?>assets/js/x-editable/ace-editable.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
                                        $(function () {

                                            //editables on first profile page
                                            $.fn.editable.defaults.mode = 'inline';
                                            $.fn.editableform.loading = "<div class='editableform-loading'><i class='light-blue icon-2x icon-spinner icon-spin'></i></div>";
                                            $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="icon-ok icon-white"></i></button>' +
                                                    '<button type="button" class="btn editable-cancel"><i class="icon-remove"></i></button>';

                                            //editables 
                                            $('#username').editable({
                                                type: 'text',
                                                name: 'username'
                                            });

                                            var countries = [];
                                            $.each({"CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function (k, v) {
                                                countries.push({id: k, text: v});
                                            });

                                            var cities = [];
                                            cities["CA"] = [];
                                            $.each(["Toronto", "Ottawa", "Calgary", "Vancouver"], function (k, v) {
                                                cities["CA"].push({id: v, text: v});
                                            });
                                            cities["IN"] = [];
                                            $.each(["Delhi", "Mumbai", "Bangalore"], function (k, v) {
                                                cities["IN"].push({id: v, text: v});
                                            });
                                            cities["NL"] = [];
                                            $.each(["Amsterdam", "Rotterdam", "The Hague"], function (k, v) {
                                                cities["NL"].push({id: v, text: v});
                                            });
                                            cities["TR"] = [];
                                            $.each(["Ankara", "Istanbul", "Izmir"], function (k, v) {
                                                cities["TR"].push({id: v, text: v});
                                            });
                                            cities["US"] = [];
                                            $.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"], function (k, v) {
                                                cities["US"].push({id: v, text: v});
                                            });

                                            var currentValue = "NL";
                                            $('#country').editable({
                                                type: 'select2',
                                                value: 'NL',
                                                source: countries,
                                                success: function (response, newValue) {
                                                    if (currentValue == newValue)
                                                        return;
                                                    currentValue = newValue;

                                                    var source = (!newValue || newValue == "") ? [] : cities[newValue];
                                                    $('#city').editable('destroy').editable({
                                                        type: 'select2',
                                                        source: source
                                                    }).editable('setValue', null);
                                                }
                                            });

                                            $('#city').editable({
                                                type: 'select2',
                                                value: 'Amsterdam',
                                                source: cities[currentValue]
                                            });



                                            $('#signup').editable({
                                                type: 'date',
                                                format: 'yyyy-mm-dd',
                                                viewformat: 'dd/mm/yyyy',
                                                datepicker: {
                                                    weekStart: 1
                                                }
                                            });

                                            $('#age').editable({
                                                type: 'spinner',
                                                name: 'age',
                                                spinner: {
                                                    min: 16, max: 99, step: 1
                                                }
                                            });

                                            //var $range = document.createElement("INPUT");
                                            //$range.type = 'range';
                                            $('#login').editable({
                                                type: 'slider', //$range.type == 'range' ? 'range' : 'slider',
                                                name: 'login',
                                                slider: {
                                                    min: 1, max: 50, width: 100
                                                },
                                                success: function (response, newValue) {
                                                    if (parseInt(newValue) == 1)
                                                        $(this).html(newValue + " hour ago");
                                                    else
                                                        $(this).html(newValue + " hours ago");
                                                }
                                            });

                                            $('#about').editable({
                                                mode: 'inline',
                                                type: 'wysiwyg',
                                                name: 'about',
                                                wysiwyg: {
                                                    //css : {'max-width':'300px'}
                                                },
                                                success: function (response, newValue) {
                                                }
                                            });



                                            // *** editable avatar *** //
                                            try {//ie8 throws some harmless exception, so let's catch it

                                                //it seems that editable plugin calls appendChild, and as Image doesn't have it, it causes errors on IE at unpredicted points
                                                //so let's have a fake appendChild for it!
                                                if (/msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()))
                                                    Image.prototype.appendChild = function (el) {
                                                    }

                                                var last_gritter
                                                $('#avatar').editable({
                                                    type: 'image',
                                                    name: 'avatar',
                                                    value: null,
                                                    image: {
                                                        //specify ace file input plugin's options here
                                                        btn_choose: 'Change Avatar',
                                                        droppable: true,
                                                        /**
                                                         //this will override the default before_change that only accepts image files
                                                         before_change: function(files, dropped) {
                                                         return true;
                                                         },
                                                         */

                                                        //and a few extra ones here
                                                        name: 'avatar', //put the field name here as well, will be used inside the custom plugin
                                                        max_size: 110000, //~100Kb
                                                        on_error: function (code) {//on_error function will be called when the selected file has a problem
                                                            if (last_gritter)
                                                                $.gritter.remove(last_gritter);
                                                            if (code == 1) {//file format error
                                                                last_gritter = $.gritter.add({
                                                                    title: 'File is not an image!',
                                                                    text: 'Please choose a jpg|gif|png image!',
                                                                    class_name: 'gritter-error gritter-center'
                                                                });
                                                            } else if (code == 2) {//file size rror
                                                                last_gritter = $.gritter.add({
                                                                    title: 'File too big!',
                                                                    text: 'Image size should not exceed 100Kb!',
                                                                    class_name: 'gritter-error gritter-center'
                                                                });
                                                            }
                                                            else {//other error
                                                            }
                                                        },
                                                        on_success: function () {
                                                            $.gritter.removeAll();
                                                        }
                                                    },
                                                    url: function (params) {
                                                        // ***UPDATE AVATAR HERE*** //
                                                        //You can replace the contents of this function with examples/profile-avatar-update.js for actual upload


                                                        var deferred = new $.Deferred

                                                        //if value is empty, means no valid files were selected
                                                        //but it may still be submitted by the plugin, because "" (empty string) is different from previous non-empty value whatever it was
                                                        //so we return just here to prevent problems
                                                        var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
                                                        if (!value || value.length == 0) {
                                                            deferred.resolve();
                                                            return deferred.promise();
                                                        }


                                                        //dummy upload
                                                        setTimeout(function () {
                                                            if ("FileReader" in window) {
                                                                //for browsers that have a thumbnail of selected image
                                                                var thumb = $('#avatar').next().find('img').data('thumb');
                                                                if (thumb)
                                                                    $('#avatar').get(0).src = thumb;
                                                            }

                                                            deferred.resolve({'status': 'OK'});

                                                            if (last_gritter)
                                                                $.gritter.remove(last_gritter);
                                                            last_gritter = $.gritter.add({
                                                                title: 'Avatar Updated!',
                                                                text: 'Uploading to server can be easily implemented. A working example is included with the template.',
                                                                class_name: 'gritter-info gritter-center'
                                                            });

                                                        }, parseInt(Math.random() * 800 + 800))

                                                        return deferred.promise();
                                                    },
                                                    success: function (response, newValue) {
                                                    }
                                                })
                                            } catch (e) {
                                            }



                                            //another option is using modals
                                            $('#avatar2').on('click', function () {
                                                var modal =
                                                        '<div class="modal hide fade">\
                                <div class="modal-header">\
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>\
                                        <h4 class="blue">Change Avatar</h4>\
                                </div>\
                                \
                                <form class="no-margin">\
                                <div class="modal-body">\
                                        <div class="space-4"></div>\
                                        <div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
                                </div>\
                                \
                                <div class="modal-footer center">\
                                        <button type="submit" class="btn btn-small btn-success"><i class="icon-ok"></i> Submit</button>\
                                        <button type="button" class="btn btn-small" data-dismiss="modal"><i class="icon-remove"></i> Cancel</button>\
                                </div>\
                                </form>\
                        </div>';


                                                var modal = $(modal);
                                                modal.modal("show").on("hidden", function () {
                                                    modal.remove();
                                                });

                                                var working = false;

                                                var form = modal.find('form:eq(0)');
                                                var file = form.find('input[type=file]').eq(0);
                                                file.ace_file_input({
                                                    style: 'well',
                                                    btn_choose: 'Click to choose new avatar',
                                                    btn_change: null,
                                                    no_icon: 'icon-picture',
                                                    thumbnail: 'small',
                                                    before_remove: function () {
                                                        //don't remove/reset files while being uploaded
                                                        return !working;
                                                    },
                                                    before_change: function (files, dropped) {
                                                        var file = files[0];
                                                        if (typeof file === "string") {
                                                            //file is just a file name here (in browsers that don't support FileReader API)
                                                            if (!(/\.(jpe?g|png|gif)$/i).test(file))
                                                                return false;
                                                        }
                                                        else {//file is a File object
                                                            var type = $.trim(file.type);
                                                            if ((type.length > 0 && !(/^image\/(jpe?g|png|gif)$/i).test(type))
                                                                    || (type.length == 0 && !(/\.(jpe?g|png|gif)$/i).test(file.name))//for android default browser!
                                                                    )
                                                                return false;

                                                            if (file.size > 110000) {//~100Kb
                                                                return false;
                                                            }
                                                        }

                                                        return true;
                                                    }
                                                });

                                                form.on('submit', function () {
                                                    if (!file.data('ace_input_files'))
                                                        return false;

                                                    file.ace_file_input('disable');
                                                    form.find('button').attr('disabled', 'disabled');
                                                    form.find('.modal-body').append("<div class='center'><i class='icon-spinner icon-spin bigger-150 orange'></i></div>");

                                                    var deferred = new $.Deferred;
                                                    working = true;
                                                    deferred.done(function () {
                                                        form.find('button').removeAttr('disabled');
                                                        form.find('input[type=file]').ace_file_input('enable');
                                                        form.find('.modal-body > :last-child').remove();

                                                        modal.modal("hide");

                                                        var thumb = file.next().find('img').data('thumb');
                                                        if (thumb)
                                                            $('#avatar2').get(0).src = thumb;

                                                        working = false;
                                                    });


                                                    setTimeout(function () {
                                                        deferred.resolve();
                                                    }, parseInt(Math.random() * 800 + 800));

                                                    return false;
                                                });

                                            });



                                            //////////////////////////////
                                            $('#profile-feed-1').slimScroll({
                                                height: '250px',
                                                alwaysVisible: true
                                            });

                                            $('.profile-social-links > a').tooltip();

                                            $('.easy-pie-chart.percentage').each(function () {
                                                var barColor = $(this).data('color') || '#555';
                                                var trackColor = '#E2E2E2';
                                                var size = parseInt($(this).data('size')) || 72;
                                                $(this).easyPieChart({
                                                    barColor: barColor,
                                                    trackColor: trackColor,
                                                    scaleColor: false,
                                                    lineCap: 'butt',
                                                    lineWidth: parseInt(size / 10),
                                                    animate: false,
                                                    size: size
                                                }).css('color', barColor);
                                            });


                                            ///////////////////////////////////////////

                                            //show the user info on right or left depending on its position
                                            $('#user-profile-2 .memberdiv').on('mouseenter', function () {
                                                var $this = $(this);
                                                var $parent = $this.closest('.tab-pane');

                                                var off1 = $parent.offset();
                                                var w1 = $parent.width();

                                                var off2 = $this.offset();
                                                var w2 = $this.width();

                                                var place = 'left';
                                                if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                                                    place = 'right';

                                                $this.find('.popover').removeClass('right left').addClass(place);
                                            }).on('click', function () {
                                                return false;
                                            });


                                            ///////////////////////////////////////////
                                            $('#user-profile-3')
                                                    .find('input[type=file]').ace_file_input({
                                                style: 'well',
                                                btn_choose: 'Change avatar',
                                                btn_change: null,
                                                no_icon: 'icon-picture',
                                                thumbnail: 'large',
                                                droppable: true,
                                                before_change: function (files, dropped) {
                                                    var file = files[0];
                                                    if (typeof file === "string") {//files is just a file name here (in browsers that don't support FileReader API)
                                                        if (!(/\.(jpe?g|png|gif)$/i).test(file))
                                                            return false;
                                                    }
                                                    else {//file is a File object
                                                        var type = $.trim(file.type);
                                                        if ((type.length > 0 && !(/^image\/(jpe?g|png|gif)$/i).test(type))
                                                                || (type.length == 0 && !(/\.(jpe?g|png|gif)$/i).test(file.name))//for android default browser!
                                                                )
                                                            return false;

                                                        if (file.size > 110000) {//~100Kb
                                                            return false;
                                                        }
                                                    }

                                                    return true;
                                                }
                                            })
                                                    .end().find('button[type=reset]').on(ace.click_event, function () {
                                                $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
                                            })
                                                    .end().find('.date-picker').datepicker().next().on(ace.click_event, function () {
                                                $(this).prev().focus();
                                            })
                                            $('.input-mask-phone').mask('(999) 999-9999');



                                            ////////////////////
                                            //change profile
                                            $('[data-toggle="buttons-radio"]').on('click', function (e) {
                                                var target = $(e.target);
                                                var which = parseInt($.trim(target.text()));
                                                $('.user-profile').parent().hide();
                                                $('#user-profile-' + which).parent().show();
                                            });
                                        });
</script>

