<?php
  $no = 1;
  foreach ($dataPayment as $payment) {
    ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $payment->transaction_id; ?></td>
      <td><?php echo $payment->payment_amount; ?></td>	  
<td><?php echo $payment->payment_mode; ?></td>
<td><?php echo $payment->username; ?></td>

<td><?php echo $payment->service_type; ?></td>
<td><?php echo $payment->datetime; ?></td>


      <td class="text-center" style="min-width:150px;">
          <button class="btn btn-warning update-dataPayment" data-id="<?php echo $payment->paymentid; ?>"><i class="glyphicon glyphicon-repeat"></i></button>
          <button class="btn btn-danger konfirmasiHapus-payment" data-id="<?php echo $payment->paymentid; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i></button>
          <button class="btn btn-info detail-dataPayment" data-id="<?php echo $payment->user_id; ?>"><i class="glyphicon glyphicon-info-sign"></i> </button>
      </td>
    </tr>
    <?php
    $no++;
  }
?>