<footer>
  <div><p>Mathys Girault©</p><p>Rouen, France</p></div>
  <div><p>giraultmathys@gmail.com</p></div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/asset/js/main.js"></script>
<script>
$(document).ready(function () {
    $('.btn-navigation').click(function () {
        $(this).find('.barre').toggleClass('white');
        $('.navigation').toggleClass('isOpen');
    });
});
</script>
</html>