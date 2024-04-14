            <footer class="sticky-footer {{request()->is('admin/*') || request()->is('admin') ? 'bg-white' : 'bg-transparent'}}">
                <div class="container {{request()->is('admin/*') ? 'my-auto' : '-mb-28 chrome:-mb-4'}}">
                    <div class="copyright text-center my-auto">
                        <span class="chrome:text-sm">Copyright &copy; Athar Rayyan Muhammad</span>
                    </div>
                </div>
            </footer>