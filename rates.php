<?php 
$output .= <<<EOD
<p><button type="button" class="btn btn-success btn-block text-uppercase my-3" data-toggle="modal" data-target="#rateList"><br>
View Our Rates<br>
</button></p>
</div>
<div class="modal" id="rateList" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title text-dark">Rates</h3>
<p><button type="button" class="close" data-dismiss="modal" aria-label="Close"><br>
<span aria-hidden="true">×</span><br>
</button></p>
</div>
<div class="modal-body">
<table class="table table-sm table-striped">
<thead>
<tr>
<th>Service</th>
<th>Rate</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tune-Up<em>set-up and adjust/tighten everything</em></td>
<td>$125</td>
</tr>
<tr>
<td>Tune-Up+ w/clean<em>set-up and adjust/tighten everything, give the bike a good cleaning, repack all bearing surfaces</em></td>
<td>$250</td>
</tr>
<tr>
<td>Gear or brake<em>cable/pad installation and adjustment</em></td>
<td>$20 – $25</td>
</tr>
<tr>
<td>Wheel truing</td>
<td>$20 – $50</td>
</tr>
<tr>
<td>Wheel building</td>
<td>$75</td>
</tr>
<tr>
<td>Repacking/Installation of Bottom bracket</td>
<td>$30 and up</td>
</tr>
<tr>
<td>Repacking/Installation of Headset</td>
<td>$30 – $40</td>
</tr>
<tr>
<td>Repacking of Front Hub</td>
<td>$30- $40</td>
</tr>
<tr>
<td>Repacking of Rear Hub</td>
<td>$40 – $50 with axle install</td>
</tr>
<tr>
<td>Assembly of boxed bike</td>
<td>$75 – $100 depending upon Tuning required.</td>
</tr>
<tr>
<td>Boxing a bike</td>
<td>$75</td>
</tr>
</tbody>
<tfoot>
<tr>
<td colspan="2">For any job that is not listed please come in or call us for an estimate. We always guarantee our work and pride ourselves on doing it right!</td>
</tr>
</tfoot>
</table>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><p></p>
</div>
</div>
</div>
</div>
EOD;
return $output;
