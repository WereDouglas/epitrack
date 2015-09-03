 
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

           

                <div class="span3" style="overflow:scroll;">
                    <div class="widget-box ">
                        <div class="widget-header">
                            <h4 class="lighter smaller">
                                <i class="icon-comment blue"></i>
                                Your messages
                            </h4>
                        </div>

                        <div class="widget-body" >
                            <div class="widget-main no-padding">
                                <div class="dialogs">

                                    <span id="loading"  name ="loading"><img src="<?= base_url(); ?>images/loading.gif" alt="loading......" /></span><br>
                                  
  <?php
                                        if (is_array($chats) && count($chats)) {
                                            foreach ($chats as $loop) {
                                                ?> 

                                    <div class="itemdiv dialogdiv">
                                        <div class="user">
                                           </div>

                                        <div class="body">
                                            <div class="time">
                                                <i class="icon-time"></i>
                                                <span class="blue"><?=$loop->datetimes?></span>
                                            </div>

                                            <div class="name">
                                                <a href="#"><?=$loop->sender?></a>
                                            </div>
                                            <div class="text"><?=$loop->message?>.</div>

                                            <div class="tools">
                                                <a href="#" class="btn btn-minier btn-info">
                                                    <i class="icon-only icon-share-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
<?php }}?>
                                </div>

                                <form id="station-form" style="margin-left: 20px;" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/chat'  method="post">            


                                    Send to:
                                    <select class="width-100" id="reciever" name="reciever" >                                                            
                                        <?php
                                        if (is_array($students) && count($students)) {
                                            foreach ($students as $loop) {
                                                ?>                        
                                                <option value="<?= $loop->fname ?>" /><?= $loop->fname . ' ' . $loop->lname ?>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>

                                    <textarea rows="2" placeholder="Type your message here ..." type="text" class="width-100" id="message" name="message" ></textarea>
                                    <button class="btn btn-small btn-info no-radius" id="send" name="send" type="submit">
                                        <i class="icon-share-alt"></i>
                                        <span class="hidden-phone">Send</span>
                                    </button>
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


<script src="<?= base_url(); ?>assets/js/x-editable/bootstrap-editable.min.js"></script>
<script src="<?= base_url(); ?>assets/js/x-editable/ace-editable.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.maskedinput.min.js"></script>

<script type="text/javascript">
    $('#loading').hide();

    $('#send').click(function (e) {
        e.preventDefault();
        var reciever = $('#reciever').val();
        var message = $('#message').val();

        $('#loading').show();
        if (message != "") {

            $.post("<?php echo base_url() ?>index.php/student/chat", {reciever: reciever, message: message}
            , function (response) {
               
                $('#loading').hide();
                setTimeout(finishAjaxitem('loading', escape(response)), 200);

            }); //end change

            function finishAjaxitem(id, response) {
                $('#' + id).html(unescape(response));
                $('#' + id).fadeIn();
            }

        } else {
            alert("Please type a message");
            $('#loading').hide();

        }



    }); //end change


</script>

