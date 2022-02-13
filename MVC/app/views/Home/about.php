<?php include_once APPROOT . '/views/includes/header.php' ?>
<style>
  .accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
  }

  .active,
  .accordion:hover {
    background-color: #ccc;
  }

  .panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
  }
</style>



<h2>About Our Project</h2>

<button class="accordion">Feature 1</button>
<div class="panel">
  <p>As a user, I can login and logout into and from my account.</p>
</div>

<button class="accordion">Feature 2</button>
<div class="panel">
  <p>As a user, I can like post from another user</p>
</div>

<button class="accordion">Feature 3</button>
<div class="panel">
  <p>As a user, I can search for cards by their names</p>
</div>
<button class="accordion">Feature 4</button>
<div class="panel">
  <p>As a user, I can add/delete/modify cards in my profile</p>
</div>


<button class="accordion">Feature 5</button>
<div class="panel">
  <p>As a user, I can set the rarity of the cards that I posted from common to legendary</p>
</div>

<button class="accordion">Feature 6</button>
<div class="panel">
  <p>As a user, I can sort post based on their price, likes, rarity, and post date.</p>
</div>

<button class="accordion">Feature 7</button>
<div class="panel">
  <p>As a buyer, I an browse for cards that are available for sale.</p>
</div>

<button class="accordion">Feature 8</button>
<div class="panel">
  <p>As a buyer, I can save posts from another user in case I want to buy them later.</p>
</div>

<button class="accordion">Feature 9</button>
<div class="panel">
  <p>As a buyer, I can have a balance in my account for buying.</p>
</div>

<button class="accordion">Feature 10</button>
<div class="panel">
  <p>As a buyer, I can add/remove cards to a cart for checkout.</p>
</div>

<button class="accordion">Feature 11</button>
<div class="panel">
  <p>As a buyer, I can add stars to a seller's profile to rate their service.</p>
</div>

<button class="accordion">Feature 12</button>
<div class="panel">
  <p>As a buyer, I can offer on a card sold by another user.</p>
</div>

<button class="accordion">Feature 13</button>
<div class="panel">
  <p>As a seller, I can list cards from my profile for sale.</p>
</div>

<button class="accordion">Feature 14</button>
<div class="panel">
  <p>As a seller, I can see the list of offers from other users and select the one I liked the most.</p>
</div>
<script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
</script>
<?php include_once APPROOT . '/views/includes/footer.php' ?>