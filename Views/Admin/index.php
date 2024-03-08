<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div>
        <?php for ($i = 0; $i < 3; $i++) { ?>
            <a class="pagination-link" href="#" data-pagination="<?php echo $i ?>"><?php echo $i ?></a>
        <?php } ?>
        <div id="result"></div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(".pagination-link").click(function(event) {
        event.preventDefault();

        const pagination = $(this).data('pagination');

        $.ajax({
            method: "GET",
            url: "../../Controllers/ProductController.php?action=product",
            data: {
                page: pagination,
            },
            success: function(response) {
                console.log(response.data);
                $('#result').html(`<h1>${response.data.page}</h1>`);
                const newUrl = window.location.pathname + '?pagination=' + pagination;
                history.pushState(null, '', newUrl);
            },
        });
    });
</script>

</html>