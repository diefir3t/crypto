// اسکریپت اصلی سایت صرافی

// نمایش قیمت‌ها به صورت سه رقم سه رقم
function formatPrice(price) {
    return Number(price).toLocaleString('en-US', { maximumFractionDigits: 2 });
}

// اسکرول نرم برای لینک‌های داخلی
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    });
});

// نمایش پیام خوش‌آمدگویی در کنسول برای بررسی لود شدن
console.log('سایت صرافی ارز دیجیتال با موفقیت بارگذاری شد.');
