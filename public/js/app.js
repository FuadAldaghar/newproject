document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('menuToggle');
    const sidebar = document.getElementById('sidebar');

    if (toggle && sidebar) {
        toggle.addEventListener('click', function () {
            sidebar.classList.toggle('open');
        });
    }

    document.querySelectorAll('.confirm-delete').forEach(function (button) {
        button.addEventListener('click', function () {
            if (confirm('هل تريد حذف هذا العنصر؟')) {
                alert('تم حذف العنصر (واجهة تجريبية)');
            }
        });
    });
});
