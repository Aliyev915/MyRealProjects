    @if ($certificate == null)
        <div class="info">
            <p>{{ __('home.not_found') }}</p>
        </div>
    @else
        <table class="table table-striped">
            <tr>
                <th>{{ __('home.name') }}</th>
                <td>{{ $certificate->student->{"name_".App::getLocale()} }}</td>
            </tr>
            <tr>
                <th>{{ __('home.lastname') }}</th>
                <td>{{ $certificate->student->{"lastname_".App::getLocale()} }}</td>
            </tr>
            <tr>
                <th>{{ __('home.passport') }}</th>
                <td>{{ $certificate->student->passport }}</td>
            </tr>
            <tr>
                <th>{{ __('home.course') }}</th>
                <td>{{ $certificate->student->course->{"title_".App::getLocale()} }}</td>
            </tr>
            <tr>
                <th>{{ __('home.continious') }}</th>
                <td>{{ $certificate->feature->continuity }}</td>
            </tr>
            <tr>
                <th>{{ __('home.teorical') }}</th>
                <td>{{ $certificate->feature->teorics }}</td>
            </tr>
            <tr>
                <th>{{ __('home.practical') }}</th>
                <td>{{ $certificate->feature->practics }}</td>
            </tr>
            <tr>
                <th>{{ __('home.course_work') }}</th>
                <td>{{ $certificate->feature->course_work }}</td>
            </tr>
            <tr>
                <th>{{ __('home.exam') }}</th>
                <td>{{ $certificate->feature->exam }}</td>
            </tr>
        </table>
        <a href="" class="btn look_certificate">{{ __('home.look_certificate') }}</a>
        <a href="" class="btn indicator" style="display: none">{{ __('home.look_student_indicator') }}</a>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script>
        document.querySelector('.look_certificate').onclick = function(e) {
            e.preventDefault();
            let parents = document.querySelectorAll('.modal-body .form-group');
            let table = this.previousElementSibling;
            let img = document.createElement('img');
            img.setAttribute('src', "{{ asset('storage/images/certificate/' . $certificate->image) }}");
            table.innerHTML = '';
            this.style.display = 'none';
            document.querySelector('.indicator').style.display = 'inline-block';
            table.append(img);
        }
        $('.indicator').click(function(e) {
            e.preventDefault();
            let text=$('.form-control').val()
            $(this).css({
                'display':'none'
            })
            $.ajax({
                url: '/certificate/' + text,
                method: 'GET',
                success: function(resp) {
                    $('.modal-body .form-group').eq(1).html('');
                    $('.modal-body .form-group').eq(1).append(resp);
                }
            })
        });

    </script>
    @endif
