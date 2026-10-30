import java.io.*;
import java.util.StringJoiner;
public class Bai2_PersonalInfor {
    public void main() throws IOException
    {
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        System.out.print("Nhập Họ và tên sinh viên: ");
        String name = br.readLine();
        System.out.print("Nhập tuổi: ");
        int age = Integer.parseInt(br.readLine());
        System.out.print("Nhập quê quán: ");
        String hometown = br.readLine();


        System.out.println("THÔNG TIN SINH VIÊN");
        System.out.printf("Họ tên sinh viên: %s\n", name);
        System.out.printf("Tuổi: %d\n", age);
        System.out.printf("Quê quán: %s\n", hometown);


    }
}
