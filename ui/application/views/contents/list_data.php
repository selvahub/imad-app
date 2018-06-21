<?php
  
  foreach ($dataContents as $contents) {
    ?>
    <tr>
      <td><?php echo $contents->id; ?></td>
<td><?php echo $contents->service_type; ?></td>
<td><?php echo $contents->description; ?></td>
<td><?php echo $contents->required_doc; ?></td>
<td><?php echo $contents->payment; ?></td>

      <td class="text-center" style="min-width:150px;">
          <button class="btn btn-warning update-dataContents" data-id="<?php echo $contents->id; ?>"><i class="glyphicon glyphicon-repeat"></i></button>
          <button class="btn btn-danger konfirmasiHapus-contents" data-id="<?php echo $contents->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i></button>
          <button class="btn btn-info detail-dataContents" data-id="<?php echo $contents->id; ?>"><i class="glyphicon glyphicon-info-sign"></i> </button>
      </td>
    </tr>
    <?php
   
  }
?>