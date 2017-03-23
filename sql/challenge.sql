/* Clear tables */
DELETE FROM challenge_sets;
DELETE FROM challenges;

/* Initial challenge set data */
INSERT INTO challenge_sets VALUES ('math', 'Math Challenges', 1, 'Math challenges include problems in algebra, geometry, trigonometry, number theory, sequences, prime numbers, etc. Test your math skills and your coding skills combined!', now(), now());
INSERT INTO challenge_sets VALUES ('puzzle', 'Puzzle Games', 2, 'These puzzle games will test your problem solving skills and will require coding skills like iteration and recursion. Plus, the solutions will help you improve your puzzle game skills!', now(), now());
INSERT INTO challenge_sets VALUES ('security', 'Security', 3, 'Take a crack at cryptography and test basic skills for keeping digital data secure.', now(), now());
INSERT INTO challenge_sets VALUES ('bioinformatics', 'Bioinformatics', 4, 'Bioinformatics is the intersection between biology and computer science. Bioinformatics problems are often related to processing genetic data represented by strings of characters with an alphabet of "ATCG" or "AUCG". Solving these types of problems helps us to better understand the human genome and genetic disorders.', now(), now());

/* Initial challenge data */

INSERT INTO challenges VALUES ('cone_area', 'Surface Area of a Cone', 'math', 1, 1, 'A cone is a geometric shape. The base is a circle, and lines coming from every point on that circle converge at a single point.<p><img src="images/area_cone_pic.png"></p><p>The equation to calculate the surface area of a cone looks like this:</p><p><img src="images/area_cone_eq.png"></p><p>Write a function named <code>cone_area</code> that takes <code>height</code> and <code>radius</code> as parameters. Return the surface area of the cone. The tests that run on your code look like <code>print(cone_area(2938, 761))</code>. If your function returns the appropriate value (rounded to the nearest 2 decimal places) and performs no printing functions, then your code will pass the tests.</p><p>Hint: Using 3.14 for pi will not be precise enough. Use <code>math.pi</code> from Python&apos;s math module or use at least 12 digits of pi (3.14159265358). Also, use the <code>round</code> function (see <a target="_blank" href="https://docs.python.org/2/library/functions.html#round">documentation here</a>).</p>', now(), now());

INSERT INTO challenges VALUES ('fib1', 'Fibonacci Sequence', 'math', 2, 1, 'The Fibonacci sequence is a mathematical sequence. It starts with (1, 1, 2, 3, 5, 8, 13, ...). Notice that each value is the sum of the previous two values. Write a function named <code>fib</code> that takes <code>n</code>, an integer, as a parameter. Return the nth value of the fibonacci sequence. The mathematical definition of the sequence is<p>fib(n=0) = 1<br/>fib(n=1) = 1<br/>fib(n>1) = fib(n-1) + fib(n-2)</p><p>The tests that run on your code look like <code>print(fib(20000))</code>. If your function returns the appropriate value and performs no printing functions, then your code will pass the tests.<p>Hint: Even though the mathematical definition uses recursion, you may want to consider using iteration to solve this problem.</p>', now(), now());

INSERT INTO challenges VALUES ('sudoku', 'Sudoku Solver', 'puzzle', 2, 3, 'A Sudoku board is 9x9 grid divided into 9 separate 3x3 squares. The initial board has some numbers (1-9) filled in. The object of the game is to get the numbers 1-9 into every row, every column, and every 3x3 square. You can learn more about Sudoku at <a target="_blank" href="https://en.wikipedia.org/wiki/Sudoku">https://en.wikipedia.org/wiki/Sudoku</a><p>For this challenge, you will be tested on solving 50 Sudoku boards. Each board is represented like so:</p><p>003020600<br/>900305001<br/>001806400<br/>008102900<br/>700000008<br/>006708200<br/>002609500<br/>800203009<br/>005010300</p><p>The 0s are blanks. Your job is to solve all 50 Sudoku puzzles. Each one has a single unique solution. The solution for the first grid shown above is</p><p>483921657<br/>967345821<br/>251876493<br/>548132976<br/>729564138<br/>136798245<br/>372689514<br/>814253769<br/>695417382<br/></p><p>Write a function <code>solve_sudoku(board)</code> where board is a two-dimensional array. For the example above, this array would look something like <code>[[0,0,3,0,2,0,6,0,0],[9,0,0,3,0,5,0,0,1],...]</code>. Return a two-dimensional array with all of the 0s replaced with numbers in the solution. In essence, return the completed sudoku board.</p><p>Hint: Use recursion. Also, write and run the Python code on your own computer instead of using the coding space in the browser (and save often!).</p>', now(), now());

INSERT INTO challenges VALUES ('tictactoe', 'Tic Tac Toe', 'puzzle', 1, 2, 'Tic Tac Toe is a game played on a 3x3 grid. The board is initially blank. The first player places an X in one of the squares on the grid, then the second player places an O in an unoccupied square. This pattern continues until one player manages to win by getting three of their symbols in a row or the board no longer has any unoccupied squares. If both players play well, the board will fill up without either player getting three in a row.<p>Blocking is an important part of the game. If the opponent has two of three squares in a row, column, or diagonal filled, you must block by placing your symbol in the third square.</p><p>For this challenge, write a function <code>pick_square(i, j)</code> that accepts two numbers 1-9. These numbers <code>i, j</code> represent two spaces with Xs. The function should return a number 1-9 that represents the square an O should be placed to block the two Xs.<p>The squares on the board will be numbered as follows:</p><p>123<br/>456<br/>789</p><p>Calculate which square you should put an O in to block the opponent. If the two Xs are not in the same row, column, or diagonal, then return 0. Otherwise the answer will be a number 1-9 representing the cell on the board in which to put an O.</p>', now(), now());

INSERT INTO challenges VALUES ('gcd', 'Greatest Common Divisor', 'math', 3, 1, 'The greatest common divisor (GCD) of two numbers (a, b) is the greatest number that multiplies evenly into both a and b. For example, the GCD of 108 and 48 is 12. The euclidean algorithm is a mathematically recursive algorithm used to efficiently compute the GCD of two numbers. The logic of the algorithm works as follows:<ul><li>If <code>a=0</code> then <code>gcd(a,b)=b</code></li><li>If <code>b=0</code> then <code>gcd(a,b)=a</code></li><li>If <code>b &gt; a</code> then recursively return <code>gcd(b,a)</code></li><li>Write <code>a</code> in the form <code>a=b*q+r</code> where q is the integer quotient (<code>a / b</code>)and r is the remainder (<code>a % b</code>)</li><li>Then <code>gcd(a,b)=gcd(b,r)</code>, so recursively return <code>gcd(b,r)</code></li></ul><p>Write a function called <code>gcd(a,b)</code> that takes two (possibly large) integers and returns the gcd. The tests that run on your code look like <code>print(gcd(12345,105))</code>. Python does have built-in functions to calculate gcd, but you should implement your own if you want to learn anything.</p>', now(), now());

INSERT INTO challenges VALUES ('kmer', 'Most Frequent K-Mer', 'bioinformatics', 1, 1, 'DNA can be represented by long strings with the letters A, C, T, and G as the only characters. These DNA strings may seem random, but there are patterns that can help us to better understand genetic disorders. For this problem, you will write a function <code>most_frequent_kmer</code> that takes two arguments <code>dna</code> and <code>k</code>. The function returns the most frequently repeated substring of length <code>k</code> found in the string <code>dna</code>. Each substring of length <code>k</code> in a DNA string is known as a <em>kmer</em> or <em>k-mer</em>.<p>The tests that run on your code look like <code>print(most_frequent_kmer("AATCCGACGTCGATAGCATAACGATGGCGATTCGA",3))</code>. If your function returns the appropriate value (and performs no printing functions) then your code will pass the tests. Each string of DNA is roughly 20,000 characters (in this case, <em>nucleotides</em>) long.<p>Hint: Use a dictionary to map kmers to their counts. Once the dictionary is created, iterate through it and keep track of the one with the highest count so far.</p>', now(), now());

INSERT INTO challenges VALUES ('decryptkey', 'Crack Decryption Key', 'security', 1, 1, 'Alice wants to send Bob an encoded message, so Alice and Bob work together to create a pair of functions for encrypting and decrypting messages. You, an attacker, intercept an encrypted message and you want to decrypt it. Through espionage, you discover that the encrypt function looks like this:<p><img src="images/encrypt_code.png"></p><p>It seems to be a pretty simplistic encryption function, so you assume that the key is simply a dictionary word. Your mission is to figure out (1) which dictionary word is the key and (2) what the original text is from the cipher that you intercepted. The cipher is:</p><p>Mrlq$4>7#0$Lr#xnh#fhklrtlqk#{dw&wki#[rvj/#eqh#xnh#[rvg$}dv$zmwl&Jrh/$drj#wlh$Zsxg#{dw#Kug1</p><p>A file of dictionary words is provided for you. You can iterate through it using something like the following code:</p><p><img src="images/dict_loop.png"></p><p>The original secret text will have the word " the " and the word " and ", but there will be more than one key that generates text with these words.</p><p>To complete this challenge, you must:</p><ol><li>Write the decrypt function that is the inverse of the given encrypt function. The encrypt function takes text and a key and returns a cipher. The decrypt function should take the cipher and the same key and return the original text.</li><li>Use the provided code to try every dictionary word as the key. You will somehow have to determine which output is valid English.</li><li>Once you know the key and the original secret text that Alice sent to Bob, submit the answer in the form "<em>key</em>: <em>secret text</em>". For example, if the key is "tomato" and the secret is "This is the best and coolest secret string" then the answer would be "tomato: This is the best and coolest secret string".</li></ol><p>File: <a target="_blank" href="./files/dictionary.txt">Download Dictionary File Here</a>', now(), now());

INSERT INTO challenges VALUES ('boggle', 'Boggle', 'puzzle', 3, 3, 'Boggle is a word game. Letters are displayed on a square board and players try to find words on the board. To find words, start at a letter tile and then proceed to a neighboring letter tile (diagonals count as neighbors). The goal of the game is to find chains of neighboring letter tiles that form words. Each letter tile can only be used once per word.<p>In this particular challenge, each Boggle board is a 5x5 grid and words are only counted if they are at least 4 letters long. The boards are represented in a file as lines that are 25 characters long. All characters are lower case and all words are NOT case-sensitive (so when reading in words from the dictionary file, make them all lower case too). For example, a line that looks like <code>abcdefghijklmnopqrstuvwxy</code> represents a board that looks like:</p><p style="font-family:monospace;letter-spacing:6px">abcde<br/>fghij<br/>klmno<br/>pqrst<br/>uvwxy</p><p>The words (and associated lengths) from this board using the given dictionary file are as follows:</p><p> ions 4<br/> minots 6<br/> styx 4<br/> toni 4<br/> joints 6<br/> into 4<br/> hmso 4<br/> tons 4<br/> dint 4<br/> dins 4<br/> snot 4<br/> mint 4<br/> tyson 5<br/> jons 4<br/> hide 4<br/> nots 4<br/> hint 4<br/> chinos 6<br/> chide 5<br/> minty 5<br/> wrns 4<br/> minot 5<br/> mints 5<br/> minos 5<br/> sonic 5<br/> tonic 5<br/> chins 5<br/> dims 4<br/> inst 4<br/> stoic 5<br/> joins 5<br/> chino 5<br/> jims 4<br/> hints 5<br/> snide 5<br/> jots 4<br/> join 4<br/> joint 5<br/> nosy 4<br/> dijon 5<br/> dints 5<br/> chin 4<br/> </p><p>Adding up all those lengths yields the number 191, so that is the solution for this specific board.</p><p>The given file of boards has 10 5x5 boards. Take the solution from each board and string concatenate them together to get the answer to this challenge.</p><p>Board File: <a target="_blank" href="files/boards.txt">Download Board File Here</a></p><p>Dictionary File: <a target="_blank" href="files/dictionary.txt">Download Dictionary File Here</a></p><p>Hint: Use recursion. As you build chains of tiles on the board, if there are no words in the dictionary that start with the letters of the current chain, then there is no need to keep building that chain. Remember that once a tile is used in a word chain, it cannot be used again in the same word chain.</p>', now(), now());


