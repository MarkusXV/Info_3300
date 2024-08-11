<?php include '../view/header.php'; ?>
<main>
 <section>
     <h1>All Utensils</h1>
     <?php echo $message .'<br/>'; ?>
     <a href="/exam2/utensils/index.php?action=create_utensil">Add Utensil</a>
     <table style="border: 1px solid black">
     <tr>
      <td>Utensil Name</td>
      <td>Utensil Description</td>
      <td>Utensil Type</td>
      <td>Utensil Yr Purchased</td>
     </tr>
     <?php foreach ($utensils as $utensil) :?>
       <tr>
         <td><?=$utensil['utensil_name']?></td>
         <td><?=$utensil['utensil_description']?></td>
         <td><?=$utensil['utensil_type']?></td>
         <td><?=$utensil['utensil_year_purchased']?></td>
       </tr>
     <?php endforeach; ?>
     </table>
 </section>
</main>
<?php include '../view/footer.php'; ?>
