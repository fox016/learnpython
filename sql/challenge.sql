/* Clear tables */
DELETE FROM challenge_sets;
DELETE FROM challenges;

/* Initial challenge set data */
INSERT INTO challenge_sets VALUES ('math', 'Math Challenges', 1, 'Math challenges include problems in algebra, geometry, trigonometry, number theory, sequences, prime numbers, etc. Test your math skills and your coding skills combined!', now(), now());
INSERT INTO challenge_sets VALUES ('puzzle', 'Puzzle Games', 2, 'These puzzle games will test your problem solving skills and will require coding skills like iteration and recursion. Plus, the solutions will help you improve your puzzle game skills!', now(), now());
INSERT INTO challenge_sets VALUES ('security', 'Security', 3, 'Take a crack at cryptography and test basic skills for keeping digital data secure.', now(), now());
INSERT INTO challenge_sets VALUES ('bioinformatics', 'Bioinformatics', 4, 'Bioinformatics is the intersection between biology and computer science. Bioinformatics problems are often related to processing genetic data represented by strings of characters with an alphabet of "ATCG" or "AUCG". Solving these types of problems help us to better understand the human genome and genetic disorders.', now(), now());

/* Initial challenge data */

INSERT INTO challenges VALUES ('cone_area', 'Surface Area of a Cone', 'math', 1, 1, 'A cone is a geometric shape. The base is a circle, and lines coming from every point on that circle converge at a single point.<p><img src="images/area_cone_pic.png"></p><p>The equation to calculate the surface area of a cone looks like this:</p><p><img src="images/area_cone_eq.png"></p><p>Write a function named <code>cone_area</code> that takes <code>height</code> and <code>radius</code> as parameters. Return the surface area of the cone.</p><p>Question: What is the surface area of a cone with a height of 2938 and radius of 761 (rounded to the nearest 2 decimal places)?</p><p>Hint: Using 3.14 for pi will not be precise enough. Use <code>math.pi</code> from Python&apos;s math module or use at least 10 digits of pi.</p>', '9075192.22', now(), now());

INSERT INTO challenges VALUES ('fib1', 'Fibonacci Sequence', 'math', 2, 1, 'The Fibonacci sequence is a mathematical sequence. It starts with (1, 1, 2, 3, 5, 8, 13, ...). Notice that each value is the sum of the previous two values. Write a function named <code>fib</code> that takes <code>n</code>, an integer, as a parameter. Return the nth value of the fibonacci sequence. The mathematical definition of the sequence is<p>fib(n=0) = 1<br/>fib(n=1) = 1<br/>fib(n>1) = fib(n-1) + fib(n-2)</p><p>Question: What are the <strong>last 50 digits</strong> of <code>fib(20000)</code>?</p><p>Hint: Even though the mathematical definition uses recursion, you may want to consider using iteration to solve this problem.</p>', '18631347739229074282048749390382177080100224710626', now(), now());

INSERT INTO challenges VALUES ('sudoku', 'Sudoku Solver', 'puzzle', 2, 3, 'A Sudoku board is 9x9 grid divided into 9 separate 3x3 squares. The initial board has some numbers (1-9) filled in. The object of the game is to get the numbers 1-9 into every row, every column, and every 3x3 square. You can learn more about Sudoku at <a target="_blank" href="https://en.wikipedia.org/wiki/Sudoku">https://en.wikipedia.org/wiki/Sudoku</a><p>For this challenge, you will be given a text file containing 50 Sudoku boards. Each board is represented in the file like so:</p><p>Grid 01<br/>003020600<br/>900305001<br/>001806400<br/>008102900<br/>700000008<br/>006708200<br/>002609500<br/>800203009<br/>005010300</p><p>The 0s are blanks. Your job is to solve all 50 Sudoku puzzles. Each one has a single unique solution. The solution for the first grid shown above is</p><p>483921657<br/>967345821<br/>251876493<br/>548132976<br/>729564138<br/>136798245<br/>372689514<br/>814253769<br/>695417382<br/></p><p>File: <a target="_blank" href="./files/sudoku.txt">Download Here</a><p>Question: What is the sum of all the 3-digit numbers found in the top left corner of each solution grid? (This number for the first solution grid shown above is 483)</p><p>Hint: Use recursion. Also, write and run the Python code on your own computer instead of using the coding space in the browser (and save often!).</p>', '24702', now(), now());

INSERT INTO challenges VALUES ('tictactoe', 'Tic Tac Toe', 'puzzle', 1, 1, 'TODO', 'TODO', now(), now());

INSERT INTO challenges VALUES ('gcd', 'Greatest Common Divisor', 'math', 3, 2, 'TODO', 'TODO', now(), now());

INSERT INTO challenges VALUES ('kmer', 'Most Frequent K-Mer', 'bioinformatics', 1, 1, 'TODO', 'TODO', now(), now());

INSERT INTO challenges VALUES ('decryptkey', 'Crack Decryption Key', 'security', 1, 2, 'TODO', 'TODO', now(), now());

INSERT INTO challenges VALUES ('boggle', 'Boggle', 'puzzle', 3, 3, 'TODO', 'TODO', now(), now());
