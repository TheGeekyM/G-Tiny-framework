<!DOCTYPE html>
<html>

<?php echo $__env->make('admin.layout.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="app">

<div id="loader">
    <div class="spinner"></div>
</div>
<script>window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
            loader.classList.add('fadeOut');
        }, 300);
    });</script>

<?php echo $__env->make('admin.layout.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

</body>

<?php echo $__env->make('admin.layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</html>