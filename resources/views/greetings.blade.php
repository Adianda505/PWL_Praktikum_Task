<!DOCTYPE html>
    <html>
        <head>
            <body>
                <div>
                    @foreach ($user as $user)
                     {{ $user->fullName }}
                     @endforeach
                </div>
            </body>
        </head>
    </html>