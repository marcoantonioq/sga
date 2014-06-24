<ul class="side-nav accordion_mnu collapsible">
    <li>
        <?php echo $this->Html->link('<span class="white-icons computer_imac"></span>Home', '/', array('escape' => false)); ?>
    </li>

    <li>
        <a href="#">
            <span class="white-icons list"></span> Forms
        </a>
        <ul class="acitem">
            <li>
                <a href="form-elements.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>All Form Elements</a>
            </li>
            <li>
                <a href="extendable-forms.html">
                    <span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Extendable Form
                </a>
            </li>
            <li>
                <a href="form-stepy.html">
                    <span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Stepy Forms
                </a>
            </li>
            <li>
                <a href="form-validation.html">
                    <span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Form Validation
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#">
            <span class="white-icons cup"></span> Features</a>
        <ul class="acitem">
            <li>
                <a href="typography.html">
                    <span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Typography
                </a>
            </li>
            <li>
                <a href="widgets.html">
                    <span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Widgets
                </a>
            </li>
            <li>
                <a href="grid.html">
                    <span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Grid
                </a>
            </li>
            <li>
                <a href="button-icons.html">
                    <span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Buttons &amp; Icons
                </a>
            </li>
            <li>
                <a href="ui-elements.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>All UI Elements
                </a>
            </li>
        </ul>
    </li>
    <li><a href="#"><span class="white-icons shuffle"></span> Others</a>
        <ul class="acitem">
            <li><a href="table.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Data Table</a></li>
            <li><a href="chart.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Chart and Graph</a></li>
            <li><a href="file-explorer.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>File Manager</a></li>
            <li><a href="calendar.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Full Calendar</a></li>
            <li><a href="colorbox.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Colorbox</a></li>
        </ul>
    </li>
    <li><a href="#"><span class="white-icons documents"></span> Pages</a>
        <ul class="acitem">
            <li><a href="inbox.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Message Box</a></li>
            <li><a href="content.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Content Post</a></li>
            <li><a href="login.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Login Page</a></li>
            <li><a href="login2.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Another Login Page</a></li>
            <li><a href="forgot-pass.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Forgot Password Page</a></li>
            <li><a href="error.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Error Page</a></li>
            <li><a href="another-error-page.html"><span class="sidenav-icon"><span class="sidenav-link-color"></span></span>Another Error Page</a></li>
        </ul>
    </li>
</ul>

<div id="side-accordion">
    <div class="accordion-group">
        <div class="accordion-header"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#side-accordion" href="#collapseOne"><i class="nav-icon month_calendar"></i> Today's event</a> </div>
        <div id="collapseOne" class="collapse in">
            <div class="accordion-content">
                <ul class="event-list">
                    <li>
                        <div class="evnt-date"> 31<span>July</span> </div>
                        <div class="event-info"> <span><i class="icon-time"></i> 12:25 PM</span>
                            <p> Anim pariatur cliche repreh enderit, enim eiusmod high life </p>
                        </div>
                    </li>
                    <li>
                        <div class="evnt-date"> 31<span>July</span> </div>
                        <div class="event-info"> <span><i class="icon-time"></i> 2:35 PM</span>
                            <p> Anim pariatur cliche repreh enderit. </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="accordion-group">
        <div class="accordion-header">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#side-accordion" href="#collapseTwo">
                <i class=" nav-icon graph"></i>
                Estatística leite
            </a>
        </div>
        <div id="collapseTwo" class="collapse">
            <div class="accordion-content">
                <div class="site-stat">
                    <h5><i class="icon-signal"></i> Visit Rates</h5>
                    <ul>
                        <li>Avarage Traffic<span class="up">35K</span></li>
                        <li>Visitors<span class="down">5%</span></li>
                        <li>Conversation Rate<span class="up">10m</span></li>
                    </ul>
                    <h5><i class="icon-align-left"></i> Unique Visit</h5>
                    <ul>
                        <li>Visit Rate<span class="up">14K </span></li>
                        <li>Bounce Rate<span class="up">10K </span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>