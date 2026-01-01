
const pwd = document.getElementById('password');
const bar = document.getElementById('strengthBar');
const txt = document.getElementById('strengthText');
const reqs = [
    document.getElementById('req1'),
    document.getElementById('req2'),
    document.getElementById('req3'),
    document.getElementById('req4'),
    document.getElementById('req5')
];

pwd.addEventListener('input', (e) => {
    const p = e.target.value;
    
    // Check requirements
    const checks = [
        p.length >= 8,
        /[A-Z]/.test(p),
        /[a-z]/.test(p),
        /[0-9]/.test(p),
        /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(p)
    ];
    
    // Update checkmarks
    checks.forEach((met, i) => {
        reqs[i].className = met ? 'd-inline me-2 req-met' : 'd-inline me-2 req-not-met';
    });
    
    // Calculate score
    const score = checks.filter(Boolean).length;
    
    // Update bar
    if (!p) {
        bar.style.width = '0%';
        bar.className = 'progress-bar strength-bar';
        txt.textContent = '';
    } else if (score <= 2) {
        bar.style.width = '25%';
        bar.className = 'progress-bar strength-bar bg-danger';
        txt.textContent = 'Debole';
        txt.className = 'fw-bold mt-1 d-block text-danger';
    } else if (score === 3) {
        bar.style.width = '50%';
        bar.className = 'progress-bar strength-bar bg-warning';
        txt.textContent = 'Discreta';
        txt.className = 'fw-bold mt-1 d-block text-warning';
    } else if (score === 4) {
        bar.style.width = '75%';
        bar.className = 'progress-bar strength-bar bg-info';
        txt.textContent = 'Buona';
        txt.className = 'fw-bold mt-1 d-block text-info';
    } else {
        bar.style.width = '100%';
        bar.className = 'progress-bar strength-bar bg-success';
        txt.textContent = 'Forte';
        txt.className = 'fw-bold mt-1 d-block text-success';
    }
});