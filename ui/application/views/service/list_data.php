<?php
  
  foreach ($dataPayment as $payment) {
    ?>
    <tr>
      <td><?php echo $service->id; ?></td>
<td><?php echo $service->status; ?></td>

      <td class="text-center" style="min-width:150px;">
          <button class="btn btn-warning update-dataService" data-id="<?php echo $service->serviceid; ?>"><i class="glyphicon glyphicon-repeat"></i></button>
          <button class="btn btn-danger konfirmasiHapus-service" data-id="<?php echo $service->serviceid; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i></button>
          <button class="btn btn-info detail-dataService" data-id="<?php echo $service->user_id; ?>"><i class="glyphicon glyphicon-info-sign"></i> </button>
      </td>
    </tr>
    <?php
   
  }
?>