            <footer class="sticky-footer {{request()->is('admin/*') || request()->is('admin') ? 'bg-white' : 'bg-transparent'}}">
                <div class="container {{request()->is('admin/*') ? 'my-auto' : '-mb-28 2xl:-mb-4'}}">
                    <div class="copyright text-center my-auto">
                        <span class="2xl:text-sm">Copyright &copy; Athar Rayyan Muhammad</span>
                    </div>
                </div>
            </footer>