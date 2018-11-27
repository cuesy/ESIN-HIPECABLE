<section id="patient_register">
  <h2>New Patient</h2>
  <form action=<?="action_patient_register.php?id=".$medic_id?> method="post">
    <input type="text" name="name" placeholder="name">
    <input type="date" name="birthdate" placeholder="birthdate">
    <input type="number" name="cc" placeholder="cc">
    <input type="number" name="weight" placeholder="weight">
    <input type="number" name="height" placeholder="height">
    <input type="email" name="email" placeholder="email">
    <input type="submit" value="Register">
  </form>  
</section>
