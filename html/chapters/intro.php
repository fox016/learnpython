<p>
Technology is constantly changing and improving. Technology has the power to affect all aspects of our society: family life, education, communication, entertainment, public health, and more. For those who understand the fundamentals of technology, technology is a tool that they have power over. Those who do not understand these fundamentals may find themselves as slaves to the technology they use. Learning to code is an important part of learning the fundamentals of the technologies that are such an integral part of modern society.
</p>

<h2>What is Coding?</h2>

<p>
Simply put, coding is writing commands to a computer. Computer code is a series of specific, unambiguous commands that tell the computer what to do. Computers function by writing data to memory, reading data from memory, and performing calculations on that data. Commands can be used to tell the computer to display text, to perform mathematical functions on numbers, to process user input, etc.
</p>

<h2>What is a Programming Language?</h2>

<p>
Unfortunately, computers don't speak English. English is too ambiguous for computers to understand perfectly. Here are some common examples of English ambiguity:
</p>

<ul>
	<li><strong>A good life depends on the liver</strong> - "Liver" may be an organ or a living person</li>
	<li><strong>Foreigners are hunting dogs</strong> - Are the foreigners going hunting for dogs, or are they dogs that hunt?</li>
	<li><strong>Each of us saw her duck</strong> - Did we see a duck that she owns, or did we see her perform the action of ducking down?</li>
	<li><strong>Passerby helps dog bite victim</strong> - Did the passerby help a victim of a dog bite, or did the passerby help a dog to bite a victim?</li>
</ul>

<p>
To avoid these problems with ambiguity, computers speak a language called <em>binary</em> or <em>machine code</em>. Binary is a language made up of 0s and 1s, and the computer hardware interprets these 0s and 1s (known as <em>bits</em>) to control electrical voltages in the computer, and those electrical voltages carry out the commands. For example, on a 64-bit operating system, every command is composed of a series of 64 bits. In the early days of computing, programmers wrote commands in 0s and 1s. This works well because computers can understand the language of binary without ambiguity.
</p>

<p>
Unfortunately, it is very hard for humans to read and understand binary code. Writing and maintaining binary code is difficult and requires a lot of work just to write basic commands that accomplish very little. What we need is a language that computers can understand perfectly and that humans can easily read and write. <em>Programming languages</em> meet the needs of both computers and human programmers. Programming languages define language rules that are unambiguous and can be translated directly into binary for computers, and they also use syntax that is relatively easy for humans to read and write.
</p>

<p>
Programming languages are often described as either being "high-level" or "low-level" languages. A <em>high-level language</em> is a programming language that is easier for humans to read and write, but requires more work to be translated (or <em>compiled</em>) into binary and thus gives the programmer less direct control over the computer. By contrast, a <em>low-level language</em> is one that is harder for humans to read and write, but translates more directly into binary and thus gives the programmer more direct control over the computer. High level languages&mdash;such as Java, C#, C++, Python, PHP, and JavaScript&mdash;are ideal for learning basic coding skills and for architecting big applications. Low level languages&mdash;such as Assembly and C&mdash;are ideal for learning the underlying fundamentals of computing and for writing powerful core software such as operating systems.
</p>

<h2>What is Python?</h2>

<p>
Python is a high-level programming language that can run on all common operating systems and prides itself on being easy to learn. This textbook allows you to write and run Python code in your internet browser, but some activities will require you to write Python files on your own computer and submit them for evaluation. You can learn more about how to install and run Python on your own computer at <a target='_blank' href='https://www.python.org/about/'>python.org</a>. The <a href='?chapter=install'>Install Python chapter</a> will also help walk you through the process of installing and running Python on your own computer.
</p>

<p>
One of the goals of the Python programming language is to define intuitive syntax that makes it more human-readable. For example, to print text to the screen, the command is simply <code>print</code>. Commands like this are known as <em>functions</em>. Functions take some kind of input and produce output. The <code>print</code> function takes a string of text wrapped in quotation marks as input, then prints that text to the screen.
</p>

<p>
Use the space below to play with the <code>print</code> function to print text to the output window. Click "Run" to see how the example works.
</p>

<div data-datacamp-exercise data-lang="python">
	<code data-type="pre-exercise-code">
	</code>
	<code data-type="sample-code">
		# Print strings of text to the screen
		print("Hello, world!")	
		print("Python is fun and easy to learn!")
	</code>
	<code data-type="solution">
		# Print strings of text to the screen
		print("Hello, world!")	
		print("Python is fun and easy to learn!")
	</code>
	<code data-type="sct">
		test_function("print")
	</code>
	<div data-type="hint">
		Use the <code>print</code> function to print text to the screen. Use the format <code>print("<em>Enter text here</em>")</code>.
	</div>
</div>

<h2>Comments in Code</h2>

<p>
In the example above, you'll notice the green text that says <code># Print strings of text to the screen</code>. That line is a <em>comment</em>. Comments are not seen by the computer. They are not commands, and they are not translated into binary for the computer to run. Comments are just for programmers to see; they are notes that a programmer writes about the code. Comments are often used to briefly describe what the code is doing so that when you come back to look at your code later, you can easily find the code you need to and have a basic understanding of what it's supposed to be doing.
</p>

<p>
In Python, single-line quotes start with <code>#</code>. That tells the computer that everything following <code>#</code> on this line is a comment and the computer should ignore it. For comments that take up multiple lines, use <code>"""</code> at both the beginning and the end of the comment.
</p>


<div data-datacamp-exercise data-lang="python">
	<code data-type="sample-code">
		# Print a greeting 
		print("Hello, world!")	

		"""
		Print something funny, perhaps something from a classic book
		or one of your favorite movies
		"""
		print("Everything is funny, as long as it's happening to somebody else")
	</code>
</div>
