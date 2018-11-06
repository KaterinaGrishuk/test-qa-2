@extends('layouts.app')

@section('content')
    <div class="content-wrap">
        <section class="menu-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dropdown">
                            <button type="button" class="menu btn btn-outline-secondary" data-toggle="dropdown">
                                Menu
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                                <a class="dropdown-item" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center">
            <div class="container">
                <div class="description-text-header">
                    <h1 class="title-header">Congratulations!</h1>
                    <h1>You are starting your practical test now. If you pass it successfully you will get a chance to study in Syberry Academy and ещ утеук f QA world.</h1>
                </div>
            </div>
        </section>

        <div class="description">
            <h1 class="text-right">Good luck!</h1>
        </div>

        <div class="home-content">
            <div class="container">
                <div class="row">
                    <h4 class="title-home-content"><span>WhAT is a Quality Assur</span>anc e Enginer?</h4>
                </div>
            </div>
            <p>Quality assurance departments exist in large companies that produce software or are in Web development. The quality assurance (QA) engineer makes sure that all of the programs work properly and that everything in a Web site functions according to plan. Software testing is diverse and involves examining the Web server, which the user never sees. <img src="{{ asset('images/home-1.png') }}" alt=""> The goal of the QA engineer is to try and make things not work so the programmer can catch errorress before they occur. "If it works, we’re not interested in it. It’s our job to anticipate a problem and think of any bone-headed thing that a user can do to a program or Web page. We play devil’s advocate, troubleshooting any combination of errors that a user could potentially make,» says one engineer. QA professionals come from a variety of backgrounds, and they are generally free thinkers who don’t have a preconceived notion of how things are supposed to work. They are problem-solvers who like a good puzzle. They are often thorough, detail-oriented, and enjoy tinkering. «Persistence is also key,” says one tennis pro turned computer pro. “If you can’t make something not work, keep on trying.”</p>

            <div class="container">
                <div class="row">
                    <p>QA engineers are the bridge between end-users and programmers, so they must understand the problems that users can encounter /lol. Early on, an entry-level QA position involves simple testing. For example, a user may need to input a password dfs into a Web site, which must be between five and ten characters. The QA engineer must then test how this will work if the user types a space, a dot, a dash, or a comma.</p>
                    <p class="home-content-text"><img src="{{ asset('images/home-2.png') }}" alt="">The quality assurance model is a concept that originated with manufacturing and crossed over into other industries, such as agriculture. Because sdfsdf\ programmers tend to lack the disciplined eye needed to see flaws, computer companies employ QA engineers to catch potential bugs before their products go to market. Computer programming used to place a heavy emphasis on testing, and there was no room for error. But with the fast-paced progression of the Internet industry, Web companies, particularly small start-ups, have a „fly by the seat of your pants„  mentality, where accuracy takes a back seat to speed in a highly competitive marketplace. The current attitude is “if it’s not really right, we can always fix it later.” Will there be more room for error as the Web converges and becomes more complex? And will companies still be willing to pay people to troubleshoot potential errors? If you look at how the computer field has evolved, programming has become more complicated and difficult, while the end product has become much easier to use. QA engineers deal with the finished product without any care for the code that goes into it. Ease of use and functionality is their only concern, so the future of QA remains to be seen.</p>
                </div>
            </div>

        </div>



        <div class="btn-home-page d-flex justify-content-between">
            <a href="{{ route('loginAction') }}" class="sign-button btn btn-primary">Sing In</a>
            <a href="{{ route('registerAction') }}" class="sign-button menu btn btn-secondary">Sing Up</a>
        </div>

    </div>
@endsection
