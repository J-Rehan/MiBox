<div class="left_section">
    <nav class="navbar">
        <ul class="navbar-list">
            <li class="sigma">
                <a class="navbar-link {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}" href="{{route("admin.dashboard.index")}}">
                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.0727 1.3148L2.2368 5.9334C1.49948 6.24767 1.021 6.97175 1.021 7.77325V20.6054C1.021 21.4273 1.52388 22.1656 2.28875 22.4665L13.0487 26.7C13.5374 26.8922 14.0821 26.8846 14.5652 26.6787L25.3858 22.0666C26.1232 21.7523 26.6016 21.0282 26.6016 20.2268V7.20593C26.6016 6.37355 26.0861 5.6282 25.3072 5.33453L14.5626 1.28325C14.0804 1.10147 13.5467 1.11277 13.0727 1.3148Z" stroke="black"></path>
                        <path d="M1.021 6.66125L12.7824 11.5618C13.304 11.7792 13.8933 11.7657 14.4044 11.5248L25.7 6.20001" stroke="black"></path>
                        <path d="M13.6017 11.9032V26.7903" stroke="black"></path>
                        <path d="M1 11.4L14 16.6" stroke="black"></path>
                        <path d="M1 15.3L14 20.5" stroke="black"></path>
                        <path d="M1 19.2L14 24.4" stroke="black"></path>
                    </svg>
                    Boxes</a>
            </li>
            <li>
                <a class="navbar-link {{ (request()->is('admin/zipcode*')) ? 'active' : '' }}" href="{{route("admin.dashboard.zipcode")}}">
                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_186_256" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="38" height="38">
                            <rect width="38" height="38" fill="#C4C4C4"></rect>
                        </mask>
                        <g mask="url(#mask0_186_256)">
                            <rect x="6" y="9" width="26" height="19" rx="2" stroke="black" stroke-linejoin="round"></rect>
                            <rect x="22" y="14" width="6" height="5" rx="2" stroke="black" stroke-linejoin="round"></rect>
                            <path d="M9.5 14.5H18" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9.5 19H18" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9 23H28" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                    zip code</a>
            </li>
            <li>
                <a class="navbar-link {{ (request()->is('admin/extras*')) ? 'active' : '' }}" href="{{route("admin.dashboard.extras")}}">
                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_186_258" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="38" height="38">
                            <rect width="38" height="38" fill="#C4C4C4"></rect>
                        </mask>
                        <g mask="url(#mask0_186_258)">
                            <rect x="7" y="14.5" width="16" height="16" rx="2" stroke="black" stroke-linejoin="round"></rect>
                            <path d="M10.5 14.5V12.75C10.5 10.1266 12.6266 8 15.25 8V8C17.8734 8 20 10.1266 20 12.75V14.5" stroke="black"></path>
                            <rect x="15" y="26.5" width="19" height="4" rx="2" fill="white" stroke="black" stroke-linejoin="round"></rect>
                            <rect x="15" y="23.5" width="19" height="3" rx="1.5" fill="white" stroke="black" stroke-linejoin="round"></rect>
                            <circle cx="15" cy="21.5" r="2" fill="black"></circle>
                            <ellipse cx="15" cy="25.5" rx="1" ry="3" fill="black"></ellipse>
                        </g>
                    </svg>
                    Extras</a>
            </li>
            <li>
                <a class="navbar-link {{ (request()->is('admin/calendar*')) ? 'active' : '' }} " href="{{route("admin.dashboard.calendar")}}">
                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_186_259" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="38" height="38">
                            <rect width="38" height="38" fill="#C4C4C4"></rect>
                        </mask>
                        <g mask="url(#mask0_186_259)">
                            <path d="M27.1255 10.1029H24.8228V8.52571C24.8228 8.38629 24.7675 8.25257 24.6689 8.15398C24.5703 8.05539 24.4366 8 24.2971 8C24.1577 8 24.024 8.05539 23.9254 8.15398C23.8268 8.25257 23.7714 8.38629 23.7714 8.52571V10.1029H14.3086V8.52571C14.3086 8.38629 14.2532 8.25257 14.1546 8.15398C14.056 8.05539 13.9223 8 13.7829 8C13.6434 8 13.5097 8.05539 13.4111 8.15398C13.3125 8.25257 13.2571 8.38629 13.2571 8.52571V10.1029H10.9545C10.1709 10.1029 9.41944 10.4141 8.86536 10.9682C8.31128 11.5223 8 12.2738 8 13.0574V27.1255C8 27.9091 8.31128 28.6606 8.86536 29.2146C9.41944 29.7687 10.1709 30.08 10.9545 30.08H27.1255C27.9091 30.08 28.6606 29.7687 29.2146 29.2146C29.7687 28.6606 30.08 27.9091 30.08 27.1255V13.0574C30.08 12.2738 29.7687 11.5223 29.2146 10.9682C28.6606 10.4141 27.9091 10.1029 27.1255 10.1029V10.1029ZM10.9545 11.1543H27.1255C27.6302 11.1543 28.1143 11.3548 28.4712 11.7117C28.8281 12.0686 29.0286 12.5526 29.0286 13.0574V14.3086H9.05143V13.0574C9.05143 12.5526 9.25193 12.0686 9.60883 11.7117C9.96573 11.3548 10.4498 11.1543 10.9545 11.1543V11.1543ZM27.1255 29.0286H10.9545C10.4498 29.0286 9.96573 28.8281 9.60883 28.4712C9.25193 28.1143 9.05143 27.6302 9.05143 27.1255V15.36H29.0286V27.1255C29.0286 27.6302 28.8281 28.1143 28.4712 28.4712C28.1143 28.8281 27.6302 29.0286 27.1255 29.0286V29.0286Z" fill="black"></path>
                            <rect x="17" y="21" width="9" height="6" rx="2" stroke="black" stroke-linejoin="round"></rect>
                        </g>
                    </svg>
                    Calendar
                </a>
            </li>
        </ul>
    </nav>
</div>
