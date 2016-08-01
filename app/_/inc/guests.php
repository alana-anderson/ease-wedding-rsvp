<?php
	// Guest array for autocomplete
  $guests = array(
  "Susan Bragdon",
  "Paul Sonnenschein",
  "7921 Bragdons",
  "Nancy & Paul Bragdon",
  "David Bragdon",
  "Andrea Vanelli",
  "Marcia O'Grady",
  "Jim O'Grady",
  "Patrick O'Grady",
  "Grace O'Grady",
  "Karen & John Ruiz",
  "Natalie Ruiz",
  "Elena Ruiz",
  "Jacob Ruiz",
  "Maricela McKay & Michiel Frishert",
  "Jodi Bostad",
  "Laura Mellick & Bob Lovitz",
  "Anna Weymann",
  "The Archer Family",
  "Lee Ann Millar",
  "Linda & Byron Dulan",
  "Jen Huling & Justin Bristol",
  "Amy & Milo Rose",
  "Steve & Juanita Acres",
  "Paul & Cindy Acres",
  "Lee Acres",
  "Pat Maybee",
  "The Shenk Family",
  "Andrew Murphy",
  "Pam & Alex Snow",
  "Ali & Jim Lind",
  "Sara Starr & Eamon Keane",
  "Alana & Eric Anderson",
  "Jonathan Sabutis",
  "Kathy Biberstein",
  "Erica Silverglide");
?>
<script>
  var guestNames = <?php echo json_encode($guests) ?>
</script>
