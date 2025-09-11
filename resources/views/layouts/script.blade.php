<script src="{{asset('src/plugins/src/global/vendors.min.js')}}"></script>
<script src="{{asset('src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('src/plugins/src/mousetrap/mousetrap.min.js')}}"></script>
<script src="{{asset('src/plugins/src/waves/waves.min.js')}}"></script>
<script src="{{asset('layouts/vertical-dark-menu/app.js')}}"></script>
<script src="{{asset('src/assets/js/dashboard/dash_1.js')}}"></script>
<script src="{{asset('src/assets/js/custom.js')}}"></script>
<script src="{{asset('src/plugins/src/table/datatable/datatables.js')}}"></script>

<script src="{{asset('src/plugins/src/tomSelect/tom-select.base.js')}}"></script>
<script src="{{asset('src/plugins/src/tomSelect/custom-tom-select.js')}}"></script>

<!-- ADD THIS: Dropdown initialization fix -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Wait a bit for all scripts to load
    setTimeout(function() {
        // Initialize Bootstrap dropdowns manually
        var dropdownElementList = [].slice.call(document.querySelectorAll('[data-bs-toggle="dropdown"]'));
        var dropdownList = dropdownElementList.map(function(dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl);
        });
        
        // Alternative manual toggle if Bootstrap dropdown doesn't work
        const userDropdown = document.getElementById('userProfileDropdown');
        const userDropdownMenu = userDropdown ? userDropdown.nextElementSibling : null;
        
        if (userDropdown && userDropdownMenu) {
            userDropdown.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Close all other dropdowns
                document.querySelectorAll('.dropdown-menu.show').forEach(function(menu) {
                    menu.classList.remove('show');
                });
                
                // Toggle current dropdown
                userDropdownMenu.classList.toggle('show');
                userDropdown.setAttribute('aria-expanded', userDropdownMenu.classList.contains('show'));
            });
            
            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!userDropdown.contains(e.target) && !userDropdownMenu.contains(e.target)) {
                    userDropdownMenu.classList.remove('show');
                    userDropdown.setAttribute('aria-expanded', 'false');
                }
            });
        }
        
        console.log('Dropdown initialization complete');
    }, 100);
});
</script>

@yield('scripts')