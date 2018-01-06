<?php
/* Set the default timezone */
date_default_timezone_set("America/Montreal");

/* Set the date */
$date = strtotime(date("Y-m-d"));

$day = date('d', $date);
$month = date('m', $date);
$month0 = date('m', $date)-1;
$month2 = date('m', $date)+1;
$year = date('Y', $date);
$firstDay = mktime(0,0,0,$month, 1, $year);
$title = strftime('%B', $firstDay);
$dayOfWeek = date('D', $firstDay);
$daysInMonth = cal_days_in_month(0, $month, $year);
/* Get the name of the week days */
$timestamp = strtotime('next Sunday');
$weekDays = array();
for ($i = 0; $i < 7; $i++) {
	$weekDays[] = strftime('%a', $timestamp);
	$timestamp = strtotime('+1 day', $timestamp);
}
$blank = date('w', strtotime("{$year}-{$month}-01"));
?>
<table class='table table-bordered' style="border:solid 0px gray; table-layout: fixed;">
	<tr style="background-color:#93D4FD">
		<th colspan="7" class="text-center"> <?php echo $title ?> <?php echo $year ?> </th>
	</tr>
	<tr>
		<?php foreach($weekDays as $key => $weekDay) : ?>
			<td class="text-center"><?php echo $weekDay ?></td>
		<?php endforeach ?>
	</tr>
	<tr>
		<?php for($i = 0; $i < $blank; $i++): ?>
			<td style="border:solid 0px gray; height:10px; width:14px; font-size:10pt; text-align:center;"></td>
		<?php endfor; ?>
		<?php for($i = 1; $i <= $daysInMonth; $i++): ?>
			<?php if($day == $i): ?>
				<td style="border:solid 0px gray; height:10px; width:14px; font-size:10pt; text-align:center; background-color:#ccc"><strong><a href="#"> <? echo $i ?> </a></strong></td>
			<?php elseif(($i == '20') || ($i == '21') || ($i == '22')): ?>
						<td style="border:solid 1px black; height:10px; width:14px; font-size:10pt; text-align:center; background-color:#9FFD8D"><strong><a href="#"> <? echo $i ?> </a></strong></td>
					<?php else: ?>
				<td style="border:solid 0px gray; height:10px; width:14px; font-size:10pt; text-align:center; background-color:#ddd"><?php echo $i ?></td>
			<?php endif; ?>
			<?php if(($i + $blank) % 7 == 0): ?>
				</tr><tr>
			<?php endif; ?>
		<?php endfor; ?>
		<?php for($i = 0; ($i + $blank + $daysInMonth) % 7 != 0; $i++): ?>
			<td style="border:solid 0px gray; height:10px; width:14px; font-size:10pt; text-align:center;></td>
		<?php endfor; ?>
	</tr>
</table>
