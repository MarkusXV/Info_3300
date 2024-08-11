<?php include '../view/header.php'; ?>
<main>
   <section>
       <h1>Add A Utensil</h1>
        <form method="post" action="/exam2/utensils/index.php">
            <input type="hidden" name="action" value="add_utensil_data"></input>
            Utensil Name: <input type="text" name="utensil_name"></input></br>
            Utensil Description: <input type="text" name="utensil_description"></input> </br>
            Utensil Type: 
            <select name="utensil_type">
                <?php foreach($utensil_types as $utensil_type) : ?>
                    <option value="<?=$utensil_type[0]?>"><?=$utensil_type[0]?></option>
                <?php endforeach; ?>
            </select>
            </br>
            Utensil Year Purchased: <input type="text" name="utensil_year_purchased"></input> </br>
            <input type="submit" value="Submit">
        </form>
   </section>
</main>
<?php include '../view/footer.php'; ?>  