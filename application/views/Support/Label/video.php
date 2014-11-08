<?php $this->load->view('layout/header'); ?>

    <!-- Menu -->
<?php $this->load->view('layout/menu'); ?>
    <div class="custom-container-fuild">
        <div class="container">
            <h1 class="page-header">Label Support</h1>

            <div class="custom-container">
                <div class="col-md-3 col-sm-4 sidebar">
                    <ul class="nav nav-stacked nav-pills">
                        <li>
                            <a href="<?= site_url('home/labelsupport'); ?>">
                                <img src="<?= base_url(); ?>public/images/label.png" width="30" height="30" >
                                Welcome
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home/labelmanual'); ?>">
                                <img src="<?= base_url(); ?>public/images/manual.png" width="30" height="30" >
                                Manuals
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home/labelphone'); ?>">
                                <img src="<?= base_url(); ?>public/images/phone.png" width="30" height="30" >
                                Contact Support
                            </a>
                        </li>
                        <li>
                            <a href="http://www.rco.com/support/index.php">
                                <img src="<?= base_url(); ?>public/images/helpicon.png" width="30" height="30" >
                                Help Ticket
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?= site_url('home/labelvideo'); ?>">
                                <img src="<?= base_url(); ?>public/images/youtube.png" width="40" height="30" >
                                Videos
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-3.col-sm-4.sidebar -->
                <div id="support">
                    <div class="col-md-12">
                        <h3 class="page-header">Learn Label</h3>
                        
                        <div class="table-responsive">
                        	<table class="table table-condensed table-striped table-hover">
                            	<thead>
                                	<tr>
                                		<th>Title</th>
                                		<th>Description</th>
                                		<th>Time (min:sec)</th>
                                		<th>YouTube</th>
                                		<th>YouTube Link</th>
                                	</tr>
                                </thead>
                                
                                <tbody>
                                	<tr>
                                		<td>Getting Started</td>
                                		<td>Create custom labels. Include barcodes like QR, PDF417, UPC and postnet. Rich graphical editor with precise placement. Database operations for bulk labeling jobs.</td>
                                		<td>5:22</td>
                                		<td><a href="https://www.youtube.com/watch?v=DRUDkP6tg-E">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=DRUDkP6tg-E</td>
                                	</tr>
                                	<tr>
                                		<td>HV01 Introduction</td>
                                		<td>Describes the basic features of the RCO Label software program.</td>
                                		<td>7:18</td>
                                		<td><a href="https://www.youtube.com/watch?v=cOmxiEZFG_g">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=cOmxiEZFG_g</td>
                                	</tr>
                                	<tr>
                                		<td>HV02 Sheet Specs</td>
                                		<td>In this video you learn how to define the RCO Label sheet specification. When you buy a sheet of labels from the store the sheet specification defines how many labels you have on a sheet, the number of columns, the number of rows, the space between columns and the space between rows.</td>
                                		<td>11:35</td>
                                		<td><a href="https://www.youtube.com/watch?v=YQIhftdr3D8">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=YQIhftdr3D8</td>
                                	</tr>
                                	<tr>
                                		<td>HV04 Line Details</td>
                                		<td>In this video you learn how to use the line tool where you can set the color, thicknes and if you want arrow heads on the start and end points.</td>
                                		<td>6:18</td>
                                		<td><a href="https://www.youtube.com/watch?v=VmrZchKubds">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=VmrZchKubds</td>
                                	</tr>
                                	<tr>
                                		<td>HV05 RectangleOvals</td>
                                		<td>This video goes into detail on how to use the rectangle and oval drawing shapes on your label design. You can set the fill color and border thickness of your objects.</td>
                                		<td>8:51</td>
                                		<td><a href="https://www.youtube.com/watch?v=x2Hv_DWx-X4">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=x2Hv_DWx-X4</td>
                                	</tr>
                                	<tr>
                                		<td>HV06 TextStrings</td>
                                		<td>Describes how to add text to your labels. You will learn how to rotate and position the text exactly where you want the text. You can set many attributes like font, color and size to name a few.</td>
                                		<td>5:38</td>
                                		<td><a href="https://www.youtube.com/watch?v=NkKgwD-Z7Bo">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=NkKgwD-Z7Bo</td>
                                	</tr>
                                	<tr>
                                		<td>HV07 Barcodes1D</td>
                                		<td>Learn how to apply one dimensional barcodes to your labels.</td>
                                		<td>10:37</td>
                                		<td><a href="https://www.youtube.com/watch?v=qAGcxfGRi-0">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=qAGcxfGRi-0</td>
                                	</tr>
                                	<tr>
                                		<td>HV09 Picture Images</td>
                                		<td>Adding a black and white or color image to a label helps convey a complex message like a picture for "Fragile" contents. You can resize or rotate the image as needed on your label.</td>
                                		<td>8:58</td>
                                		<td><a href="https://www.youtube.com/watch?v=CFiKU14htgs">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=CFiKU14htgs</td>
                                	</tr>
                                	<tr>
                                		<td>HV08 PDF417Barcodes</td>
                                		<td>Shows you how to add a PDF417 barcode object to your label. This barcode is great because you can put up to 1000 characters in the barcode that can be read with a 2D barcode scanner. You may have seen this code on airport tickets or shipping package labels.</td>
                                		<td>13:02</td>
                                		<td><a href="https://www.youtube.com/watch?v=72bWG6_uQB0">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=72bWG6_uQB0</td>
                                	</tr>
                                	<tr>
                                		<td>HV10 Block Text</td>
                                		<td>While you can use the single line text tool the block text tool gives you the convenience or working with multiple lines all at once. You can resize the containing text box. You can rotate the whole text block.</td>
                                		<td>8:31</td>
                                		<td><a href="https://www.youtube.com/watch?v=ae9nQnE7twc">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=ae9nQnE7twc</td>
                                	</tr>
                                	<tr>
                                		<td>HV11 Wave Objects</td>
                                		<td>This video covers how to use the spline drawing object. While it does take some effort to learn the tool you can create some really nice curved shapes and then do nice fills. This is great on vertical folder labels where you want to have some curved regions for the year or background for certain key numbers.</td>
                                		<td>1:43</td>
                                		<td><a href="https://www.youtube.com/watch?v=cqr2fnuTtsk">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=cqr2fnuTtsk</td>
                                	</tr>
                                	<tr>
                                		<td>HV13 StarPolygonObject</td>
                                		<td>Shows how to add a polygon object that looks like a star. This drawing object is great when you want to focus people in on store specials that have been discounted for super savings.</td>
                                		<td>4:22</td>
                                		<td><a href="https://www.youtube.com/watch?v=ox6LjsTRpEg">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=ox6LjsTRpEg</td>
                                	</tr>
                                	<tr>
                                		<td>HV14 DuplicatingObjects</td>
                                		<td>In this video you learn how to save time when you want to create the same object mulitple times. For example suppose you want to have a border of stars and you want to replicate this on the bottom of the label.</td>
                                		<td>3:49</td>
                                		<td><a href="https://www.youtube.com/watch?v=5HGy309U42E">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=5HGy309U42E</td>
                                	</tr>
                                	<tr>
                                		<td>HV15 Zorders</td>
                                		<td>When you draw multiple objects that overlap you will want to control the order in which the objects are drawn. For example if you have a square and a circle that overlap you may want to see the whole cirecle and the square is in the background. Z Order defines the layering of objects. Some people think of Z order as the depth of an object.</td>
                                		<td>3:10</td>
                                		<td><a href="https://www.youtube.com/watch?v=_fhkrHza920">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=_fhkrHza920</td>
                                	</tr>
                                	<tr>
                                		<td>HV16 TextCase</td>
                                		<td>Learn how to modify your text by applying different styles like the font family, size, color and whether you want the characters bold.</td>
                                		<td>1:51</td>
                                		<td><a href="https://www.youtube.com/watch?v=A8RSVt9LU0Q">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=A8RSVt9LU0Q</td>
                                	</tr>
                                	<tr>
                                		<td>HV17 AlignmentTools</td>
                                		<td>Learn how to align multiple lines of text with the Align Objects toolbox. This is especially useful when you are doing mailing labels and want everything lined up evenly.</td>
                                		<td>5:10</td>
                                		<td><a href="https://www.youtube.com/watch?v=vA1P8VQsH9U">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=vA1P8VQsH9U</td>
                                	</tr>
                                	<tr>
                                		<td>HV18 Keystrokes</td>
                                		<td>Shows how to do some operations using a combination of keyboard characters instead of having to click serveral times.</td>
                                		<td>1:27</td>
                                		<td><a href="https://www.youtube.com/watch?v=Ts2LD9uUoyc">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=Ts2LD9uUoyc</td>
                                	</tr>
                                	<tr>
                                		<td>HV19 Main Default Files</td>
                                		<td>Reviews some of the preset files used by the program to perform the most common templates. Please only change these files if you are an expert and understand how this will affect the common labels like envelopes.</td>
                                		<td>0:46</td>
                                		<td><a href="https://www.youtube.com/watch?v=dHIRY3GgHbQ">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=dHIRY3GgHbQ</td>
                                	</tr>
                                	<tr>
                                		<td>HV20 Special Purporse Files</td>
                                		<td>This covers special files for setup and initialization.</td>
                                		<td>0:44</td>
                                		<td><a href="https://www.youtube.com/watch?v=WUnqasJj7H8">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=WUnqasJj7H8</td>
                                	</tr>
                                	<tr>
                                		<td>HV21 SnapTo Grid</td>
                                		<td>When you place drawing objects you may want to enable the snap to grid option. This helps when you want to align your drawing objects. For example supose you have 4 small rectangles. You could precisely measure where you want to place each box or you could use snap to grid and then place them near and x and y grid line and then your objects would be aligned.</td>
                                		<td>3:24</td>
                                		<td><a href="https://www.youtube.com/watch?v=WUnqasJj7H8">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=WUnqasJj7H8</td>
                                	</tr>
                                	<tr>
                                		<td>HV22 Color Maps</td>
                                		<td>Learn how to use color maps so that you have a consistent way to create color coded labels. This feature gets heavily used in medical folders where you want to control the background color of a particular number.</td>
                                		<td>5:53</td>
                                		<td><a href="https://www.youtube.com/watch?v=_hRYqfN2VwA">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=_hRYqfN2VwA</td>
                                	</tr>
                                	<tr>
                                		<td>HV23 Automatic Printing</td>
                                		<td>Watch this video when you want to print a batch of labels and you want to create a simple text file that controls which items change and which items are static (don't change).</td>
                                		<td>9:28</td>
                                		<td><a href="https://www.youtube.com/watch?v=HRZeEc-_2CA">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=HRZeEc-_2CA</td>
                                	</tr>
                                	<tr>
                                		<td>HV24 Name Addresses</td>
                                		<td>Shows how to create a text file used in creating a mailing list when you don't have a database.</td>
                                		<td>3:58</td>
                                		<td><a href="https://www.youtube.com/watch?v=etrkgNAzOss">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=etrkgNAzOss</td>
                                	</tr>
                                	<tr>
                                		<td>HV25 Serial Numbers</td>
                                		<td>In any manufacturing busines you may want to produce several labels and have a unique number that identifies each item you have made. For example suppose you make motors you may want to have a label that has the S/N = serial number for each motor.</td>
                                		<td>2:26</td>
                                		<td><a href="https://www.youtube.com/watch?v=hQdae4Tnqok">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=hQdae4Tnqok</td>
                                	</tr>
                                	<tr>
                                		<td>HV26 Notebook Tabs</td>
                                		<td>When you have a ring binder and you have dividers this video shows how to create labels for your dividers. These labels help to organize the information in the notebook so a reader can quickly find or go to a particular section.</td>
                                		<td>2:02</td>
                                		<td><a href="https://www.youtube.com/watch?v=7PxQILDTC0A">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=7PxQILDTC0A</td>
                                	</tr>
                                	<tr>
                                		<td>HV 28 CSVFile Conversions</td>
                                		<td>When you have a large group of data you want to put on a label you need to first save the information into a comma separated value (CSV) file and then do the mapping from the CSV file to the data format that the label program can use to create your labels.</td>
                                		<td>11:14</td>
                                		<td><a href="https://www.youtube.com/watch?v=6szKnZCeC9o">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=6szKnZCeC9o</td>
                                	</tr>
                                	<tr>
                                		<td>HV29 SelectASheetSpec</td>
                                		<td>Before you can design a label template you need to specify the label sheet. This video shows how to choose a label sheet specification and what all the different parameters mean. There is a graphical example that changes as you put in different parameters. For example whe you change number of rows you will see the preview with the number of rows you specify. This is useful to compare that the physical label sheet you have in your hand matches what the program is going to print.</td>
                                		<td>6:19</td>
                                		<td><a href="https://www.youtube.com/watch?v=JjmOYjlS85w">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=JjmOYjlS85w</td>
                                	</tr>
                                	<tr>
                                		<td>HV31 Categories</td>
                                		<td>Often you may want to have several different mailing labels when you do targeted mail list campaigns. For example you may have several different categories of mail lists like doctors, lawyers and accountants. This video covers how to create and manage all your mail list categories.</td>
                                		<td>5:43</td>
                                		<td><a href="https://www.youtube.com/watch?v=3I9Tv1AjkYM">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=3I9Tv1AjkYM</td>
                                	</tr>
                                	<tr>
                                		<td>HV32 General Tables</td>
                                		<td>This video covers technical details concerning the various database tables (information silos) used by the program.</td>
                                		<td>12:10</td>
                                		<td><a href="https://www.youtube.com/watch?v=z8EAWPylkhA">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=z8EAWPylkhA</td>
                                	</tr>
                                	<tr>
                                		<td>HV34 CSVEditing</td>
                                		<td>When you export or save data from one program into a comma seperated value (CSV) you may need to make changes and this video shows you how to manipulate CSV files.</td>
                                		<td>8:13</td>
                                		<td><a href="https://www.youtube.com/watch?v=kmSCsN-UJgU">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=kmSCsN-UJgU</td>
                                	</tr>
                                	<tr>
                                		<td>HV35 Database Backup</td>
                                		<td>Whenever you do something on a computer you want to create a copy just in case your computer hard drive dies or also if you make many editing changes and want to use a previous version. Watch this video to learn how to backup (save) your database.</td>
                                		<td>5:46</td>
                                		<td><a href="https://www.youtube.com/watch?v=JKNEFVOGMIk">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=JKNEFVOGMIk</td>
                                	</tr>
                                	<tr>
                                		<td>HV36 Database Mapping Files</td>
                                		<td>You have a database that consists of several columns and many rows of data. This video shows how you setup the mapping between the database columns and the dynamic objects on your label template. This is an advanced video.</td>
                                		<td>5:46</td>
                                		<td><a href="https://www.youtube.com/watch?v=25zCo2Q0-hc">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=25zCo2Q0-hc</td>
                                	</tr>
                                	<tr>
                                		<td>HV37 Database Printing</td>
                                		<td>In this video you learn how to select one or more records in one of your database tables and provided you have already setup and database mapping to your template objects you can print all the slected objects.</td>
                                		<td>4:32</td>
                                		<td><a href="https://www.youtube.com/watch?v=DunmNnHZhi0">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=DunmNnHZhi0</td>
                                	</tr>
                                	<tr>
                                		<td>HV38 Quick Start</td>
                                		<td>If you want a quick start of creating and printing a simple label this video will get you going in no time.</td>
                                		<td>2:53</td>
                                		<td><a href="https://www.youtube.com/watch?v=ETlh582_DN4">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=ETlh582_DN4</td>
                                	</tr>
                                	<tr>
                                		<td>HV39 Quadrilateral Objects</td>
                                		<td>Learn how to work with quadrilateral drawing objects. You can specify how many sides the polygon will have. This is a great object when you want to create store specials for example.</td>
                                		<td>6:21</td>
                                		<td><a href="https://www.youtube.com/watch?v=QjzsueTSOPg">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=QjzsueTSOPg</td>
                                	</tr>
                                	<tr>
                                		<td>HV40 QR Barcodes</td>
                                		<td>This 2 dimensional code was created in Japan for manufacturing and to handle curved surfaces, have good error handling and be readable from any angle. The marketing people use this 2 dimensional code to provide web links people can connect with by scanning the code with their smart phones. You will learn how to create your own QR code for magazines, brochures, business cards and many more.</td>
                                		<td>11:43</td>
                                		<td><a href="https://www.youtube.com/watch?v=1eq0f2nUzL4">Video</a></td>
                                		<td>https://www.youtube.com/watch?v=1eq0f2nUzL4</td>
                                	</tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
            <br>
            <br>
        </div>
        <!-- /.container -->
    </div>

    <!-- Footer -->
<?php $this->load->view('layout/footer'); ?>