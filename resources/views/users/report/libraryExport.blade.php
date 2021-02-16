
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
               <th>Book No</th>
               <th>Book Category</th>
               <th>Book Name</th>
               <th>Author Name</th>
               <th>Publisher Name</th>
               <th>Purchase Date</th>
               <th>Total Quantity</th>
               <th>Issued Books</th>
               <th>Available Books</th>
            </tr>
        </thead>
        <tbody>				   
            @foreach($getCategoryBooks as $key => $book)
               <tr>
                   <td>{{ $key+1 }}</td>
                   <td>{{ $book->book_no }}</td>
                   <td>{{ $book->category }}</td>
                   <td>{{ $book->book_name }}</td>
                   <td>{{ $book->auth_name }}</td>
                   <td>{{ $book->publisher_name }}</td>
                   <td>{{ date('d-m-Y',strtotime($book->purchase_date)) }}</td>
                   <td>{{ $book->no_of_books }}</td>
                   <td>
						{{ $book->issued_books }}
					</td>
                    <td>
						@if($book->available == '0')
							{{ $book->no_of_books - $book->issued_books  }} 
                        @else
							{{ $book->no_of_books }}
                        @endif
                    </td>
                   
               </tr>
           @endforeach
				<tr>
                   <th colspan="4"></th>
                   <th colspan="3"><center>Total</center></th>
                   <th>{{ $totalNoBooks }}</th>
                   <th>{{ $totalIssue }}</th>
                   <th>{{ $totalAvailability}}</th>
               </tr>
        </tbody>
    </table>
    