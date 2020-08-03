<script>
  function logo () {
    const userPic = document.querySelector('.e2-user-picture-image');
    const titles = document.querySelectorAll('.e2-smart-title');
    for (var i = 1; i < titles.length; i++) {
      const createImg = document.createElement('img');
      createImg.src = userPic.src;
      createImg.classList.add('title-image');
      titles[i].prepend(createImg);
    }
  }
  logo();
</script>
