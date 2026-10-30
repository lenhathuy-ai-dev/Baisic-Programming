fun main()
{
    println ("CHƯƠNG TRÌNH ĐẦU TIÊN BẰNG KOTLIN");
    
    print ("Nhập họ tên của người lập trình: ");
    var name: String = readln();
    
    print ("Nhập năm sinh của người lập trình: ");
    var birthYear: Int = readln().toInt();
    
    print ("Nhập quê quán của người lập trình: ");
    var hometown: String = readln();


    println ("Hello Kotlin");
    println ("Tôi tên là $name, tôi đến từ $hometown và tôi ${2026-birthYear} tuổi.");
}