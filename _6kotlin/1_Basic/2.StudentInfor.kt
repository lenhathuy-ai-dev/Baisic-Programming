fun main()
{
    println("CHƯƠNG TÌNH THÔNG TIN SINH VIÊN");
    print ("Nhập mã sinh viên: ");
    val masinhvien: String = readln();

    print ("Nhập Họ và tên sinh viên: ");
    val hoten: String = readln();

    print ("Nhập tuổi sinh viên: ");
    val tuoi: Int  = readln().toInt();

    print ("Nhập điểm trung bình: ");
    val diemTB: Float = readln().toFloat();

    println("THÔNG TIN SINH VIÊN");
    println ("Mã sinh viên: $masinhvien");
    println("Họ và tên: $hoten");
    println("Tuổi: $tuoi");
    println("Điểm trung bình: $diemTB");

}